<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDaDk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDaDkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDaDk;

		$this->assertEquals(new LanguageDa, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryDk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('danish_ci', $locale->collation());
		$this->assertSame('da_DK', $locale->code());
		$this->assertSame('da', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="da"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
