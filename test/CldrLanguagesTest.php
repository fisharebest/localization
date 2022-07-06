<?php

namespace Fisharebest\Localization;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class CldrLanguagesTest extends TestCase
{
    /**
     * Test languages
     *
     * @medium
     */
    public function testLanguages()
    {
        foreach (glob(__DIR__ . '/data/cldr-34/main/*.xml') as $xml) {
            if (strpos($xml, '/root.xml') === false) {
                $cldr         = simplexml_load_string(file_get_contents($xml));
                $locale       = Locale::create(basename($xml, '.xml'));
                $language_tag = $locale->languageTag();

                $endonyms = $cldr->xpath("/ldml/localeDisplayNames/languages/language[@type='" . $language_tag . "'][not(@alt)]");
                foreach ($endonyms as $endonym) {
                    $debug = implode('|', array(
                        basename($xml),
                        $endonym,
                    ));

                    $this->assertSame((string) $endonym, $locale->endonym(), $debug);
                }
            }
        }
    }
}
