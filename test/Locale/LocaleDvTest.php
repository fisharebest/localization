<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDv class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDvTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDv;

		$this->assertEquals(new LanguageDv, $locale->language());
		$this->assertEquals(new ScriptThaa, $locale->script());
		$this->assertEquals(new TerritoryMv, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('dv_MV', $locale->code());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('ތާނަ', $locale->endonym());
		$this->assertSame('lang="dv" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('dv', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
