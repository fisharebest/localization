<?php

namespace Fisharebest\Localization;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the IANA subtag registry
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class IanaSubtagRegistryTest extends TestCase
{
    /**
     * Test the language tags against the IANA subtag registry
     *
     * @large
     */
    public function testLanguageTags()
    {
        $iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: language/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $class = __NAMESPACE__ . '\Language\Language' . ucfirst(strtolower($match[1]));
            // The registry contains 8000 languages, and we aren't interested in most of them.
            if (class_exists($class)) {
                /** @var LanguageInterface $language */
                $language = new $class();

                $this->assertSame($match[1], $language->code());
            }
        }
    }

    /**
     * Test the script tags against the IANA subtag registry
     *
     * @large
     */
    public function testScriptTags()
    {
        $iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: script/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $class = __NAMESPACE__ . '\Script\Script' . ucfirst(strtolower($match[1]));
            /** @var ScriptInterface $script */
            $script = new $class();

            $this->assertSame($match[1], $script->code());
        }
    }

    /**
     * Test the territory (region) tags against the IANA subtag registry
     *
     * @large
     */
    public function testTerritoryTags()
    {
        $iana = file_get_contents(__DIR__ . '/data/language-subtag-registry');
        $iana = explode("%%\n", $iana);
        $iana = preg_grep('/Type: region/', $iana);
        $iana = preg_grep('/Private use/', $iana, PREG_GREP_INVERT);

        foreach ($iana as $data) {
            preg_match('/Subtag: (.+)/', $data, $match);
            $class = __NAMESPACE__ . '\Territory\Territory' . ucfirst(strtolower($match[1]));
            /** @var TerritoryInterface $territory */
            $territory = new $class();

            $this->assertSame($match[1], $territory->code());
        }
    }
}
