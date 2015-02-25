<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleHuHu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleHuHuTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleHuHu;

		$this->assertEquals(new LanguageHu, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryHu, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('hungarian_ci', $locale->collation());
		$this->assertSame('hu_HU', $locale->code());
		$this->assertSame('hu', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="hu"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
