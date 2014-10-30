<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleArEg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleArEgTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleArEg;

		$this->assertEquals(new LanguageAr, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryEg, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ar_EG', $locale->code());
		$this->assertSame('ar-EG', $locale->languageTag());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->convertDigits('0123456789'));
	}
}
