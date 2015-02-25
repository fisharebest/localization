<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLv class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLvTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLv;

		$this->assertEquals(new LanguageLv, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryLv, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('latvian_ci', $locale->collation());
		$this->assertSame('latviešu', $locale->endonym());
		$this->assertSame('lv_LV', $locale->code());
		$this->assertSame('lv', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="lv"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
