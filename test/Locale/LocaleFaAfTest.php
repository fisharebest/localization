<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleFaAf class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleFaAfTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleFaAf;

		$this->assertEquals(new LanguageFa, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryAf, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('persian_ci', $locale->collation());
		$this->assertSame('fa_AF', $locale->code());
		$this->assertSame('fa-AF', $locale->languageTag());
		$this->assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
		$this->assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
		$this->assertSame('lang="fa-AF" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('‎−۱۲۳', $locale->number(-123));
	}
}
