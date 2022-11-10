<?php

namespace Fisharebest\LocalizationTest;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use PHPUnit\Framework\TestCase;

use function class_exists;
use function explode;
use function file_get_contents;
use function preg_grep;
use function preg_match;
use function strtolower;
use function ucfirst;

use const PREG_GREP_INVERT;

/**
 * Tests for the IANA subtag registry
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @coversNothing
 */
class IanaSubtagRegistryTest extends TestCase
{
    /**
     * Test the language tags against the IANA subtag registry
     *
     * @large
     */
    public function testLanguageTags(): void
    {
        $iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: language/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $subtag = $match[1];
            $class = '\\Fisharebest\\Localization\\Language\\Language' . ucfirst(strtolower($match[1]));
            // The registry contains 8000 languages, and we aren't interested in most of them.
            if (class_exists($class)) {
                /** @var LanguageInterface $language */
                $language = new $class();

                // Deprecated tags should use their new, preferred value.
                if (preg_match('/Preferred-Value: ([a-z]+)/', $data, $match2)) {
                    $subtag = $match2[1];
                }

                self::assertSame($subtag, $language->code());
            }
        }
    }

    /**
     * Test the script tags against the IANA subtag registry
     *
     * @large
     */
    public function testScriptTags(): void
    {
        $iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: script/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $class = '\\Fisharebest\\Localization\\Script\\Script' . ucfirst(strtolower($match[1]));
            /** @var ScriptInterface $script */
            $script = new $class();

            self::assertSame($match[1], $script->code());
        }
    }

    /**
     * Test the territory (region) tags against the IANA subtag registry
     *
     * @large
     */
    public function testTerritoryTags(): void
    {
        $iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: region/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $class = '\\Fisharebest\\Localization\\Territory\\Territory' . ucfirst(strtolower($match[1]));
            /** @var TerritoryInterface $territory */
            $territory = new $class();

            self::assertSame($match[1], $territory->code());
        }
    }
}
