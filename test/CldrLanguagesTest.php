<?php

namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the CLDR
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
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
        foreach (glob(__DIR__ . '/data/cldr-33.1/main/*.xml') as $xml) {
            if (strpos($xml, '/root.xml') === false) {
                $cldr         = simplexml_load_file($xml);
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
