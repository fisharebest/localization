<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleArIq class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleArIqTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleArIq;

		$this->assertEquals(new LanguageAr, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryIq, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ar_IQ', $locale->code());
		$this->assertSame('ar-IQ', $locale->languageTag());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->convertDigits('0123456789'));
	}
}
