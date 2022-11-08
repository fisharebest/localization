<?php

namespace Fisharebest\LocalizationTest;

use Exception;
use Fisharebest\Localization\Locale;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @coversNothing
 */
class CldrTest extends TestCase
{
    private const DIRECTIONS = array(
        'left-to-right' => 'ltr',
        'right-to-left' => 'rtl',
    );

    /**
     * Test layout
     *
     * @medium
     */
    public function testCharacterOrder(): void
    {
        foreach (glob(__DIR__ . '/data/cldr-42/main/*.xml') as $cldr) {
            if (!str_ends_with($cldr, '/root.xml')) {
                $locale = Locale::create(basename($cldr, '.xml'));
                $dir    = $this->cldrValue($cldr, '/ldml/layout/orientation/characterOrder');

                self::assertSame(self::DIRECTIONS[$dir], $locale->direction(), $cldr);
            }
        }
    }

    /**
     * Test numbers
     *
     * @large
     */
    public function testNumbers(): void
    {
        foreach (glob(__DIR__ . '/data/cldr-42/main/*.xml') as $cldr) {
            if (!str_ends_with($cldr, '/root.xml')) {
                $locale = Locale::create(basename($cldr, '.xml'));

                $def_num_system = $this->cldrValue($cldr, "/ldml/numbers/defaultNumberingSystem");
                try {
                    $alias = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/alias/@path");
                    if ($alias === "../symbols[@numberSystem='latn']") {
                        $def_num_system = 'latn';
                    }
                } catch (Exception) {
                }
                $decimal      = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/decimal");
                $group        = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/group");
                $percent_sign = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/percentSign");
                $minus_sign   = $this->cldrValue($cldr, "/ldml/numbers/symbols[@numberSystem='" . $def_num_system . "']/minusSign");

                $def_num_system = $this->cldrValue($cldr, "/ldml/numbers/defaultNumberingSystem");
                try {
                    $alias = $this->cldrValue($cldr, "/ldml/numbers/decimalFormats[@numberSystem='" . $def_num_system . "']/alias/@path");
                    if ($alias === "../decimalFormats[@numberSystem='latn']") {
                        $def_num_system = 'latn';
                    }
                } catch (Exception) {
                }
                $standard = $this->cldrValue($cldr, "/ldml/numbers/decimalFormats[@numberSystem='" . $def_num_system . "']/decimalFormatLength[not(@type)]/decimalFormat/pattern");
                $percent  = $this->cldrValue($cldr, "/ldml/numbers/percentFormats[@numberSystem='" . $def_num_system . "']/percentFormatLength[not(@type)]/percentFormat/pattern");

                // The CLDR example doesn't demonstrate the lack of group separators.
                if ($standard === '0.######' && $locale->languageTag() === 'en-US-posix') {
                    $standard = '########.###';
                }

                // Check the (end of the) number matches the pattern.  Extra leading digits are OK.
                $number = $locale->number(12345678.089);

                $regex = '/' . strtr($standard, array(
                        ',' => preg_quote($group, '/'),
                        '.' => preg_quote($decimal, '/'),
                        '0' => '.',
                        '#' => '.',
                    )) . '$/u';

                $debug = implode('|', array(
                    basename($cldr),
                    'regex=' . $regex . '=' . bin2hex($regex),
                    'number=' . $number . '=' . bin2hex($number),
                    'standard=' . $standard . '=' . bin2hex($standard),
                ));

                if ($locale->language()->code() !== 'oc') {
                    // oc.xml does not use its own punctuation in its examples.
                    self::assertSame(1, preg_match($regex, $number), $debug);
                }

                // Check the percentage matches the pattern.
                $number = $locale->percent(12345.67);

                $regex = '/' . strtr($percent, array(
                        ',' => preg_quote($group, '/'),
                        '.' => preg_quote($decimal, '/'),
                        '0' => '.',
                        '#' => '.',
                        '%' => preg_quote($percent_sign, '/'),
                    )) . '/u';

                $debug = implode('|', array(
                    basename($cldr),
                    'percentSign=' . $percent_sign . '=' . bin2hex($percent_sign),
                    'regex=' . $regex . '=' . bin2hex($regex),
                    'number=' . $number . '=' . bin2hex($number),
                    'percent=' . $percent,
                ));

                if ($locale->language()->code() !== 'oc') {
                    // oc.xml does not use its own punctuation in its examples.
                    self::assertSame(1, preg_match($regex, $number), $debug);
                }

                // Check the minus sign is correct
                $number = $locale->number(-1);

                $debug = implode('|', array(
                    basename($cldr),
                    'minusSign=' . $minus_sign . '=' . bin2hex($minus_sign),
                    'number=' . $number . '=' . bin2hex($number),
                ));

                self::assertStringStartsWith($minus_sign, $number, $debug);
            }
        }
    }

    /**
     * Find the parent to a CLDR locale file.
     * en_GB.xml -> en.xml -> root.xml
     *
     * @param string $file
     *
     * @return string
     */
    private function parentCldr(string $file): string
    {
        $dirname  = dirname($file);
        $basename = basename($file, '.xml');
        $parts    = explode('_', $basename);

        if (count($parts) === 1) {
            return $dirname . '/root.xml';
        }

        return $dirname . '/' . implode('_', array_slice($parts, 0, -1)) . '.xml';
    }

    /**
     * @param string $file
     * @param string $xpath
     *
     * @return string
     * @throws Exception
     */
    private function cldrValue(string $file, string $xpath): string
    {
        $xml = simplexml_load_string(file_get_contents($file));
        $tmp = $file;

        while ($xml->xpath($xpath) == false) {
            if (str_ends_with($file, '/root.xml')) {
                throw new Exception('Cannot find ' . $xpath . ' in ' . $tmp);
            }
            $file = $this->parentCldr($file);
            $xml  = simplexml_load_string(file_get_contents($file));
        }
        $data = $xml->xpath($xpath);

        return (string) $data[0];
    }
}
