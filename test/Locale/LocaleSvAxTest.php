<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSvAx class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSvAxTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSvAx;

		$this->assertEquals(new LanguageSv, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryAx, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('swedish_ci', $locale->collation());
		$this->assertSame('sv_AX', $locale->code());
		$this->assertSame('sv-AX', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="sv-AX"', $locale->htmlAttributes());
		$this->assertSame('−123', $locale->number(-123));
	}
}
