<?php namespace Fisharebest\Localization;

use Fisharebest\Localization\Locale\LocaleInterface;
use Fisharebest\Localization\Locale\LocaleNmg;
use Fisharebest\Localization\Territory\TerritoryInterface;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the CLDR
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class CldrLanguagesTest extends TestCase {
	/**
	 * Test languages
	 *
	 * @medium
	 */
	public function testLanguages() {
		foreach (glob(__DIR__ . '/data/cldr-29/main/*.xml') as $xml) {
			if (strpos($xml, '/root.xml') === false) {
				$cldr         = simplexml_load_file($xml);
				$locale       = Locale::create(basename($xml, '.xml'));
				$language_tag = $locale->languageTag();

				$endonyms = $cldr->xpath("/ldml/localeDisplayNames/languages/language[@type='". $language_tag . "'][not(@alt)]");
				foreach ($endonyms as $endonym) {
					$this->assertSame((string) $endonym, $locale->endonym());
				}
			}
		}
	}
}
