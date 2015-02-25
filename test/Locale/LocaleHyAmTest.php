<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleHyAm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleHyAmTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleHyAm;

		$this->assertEquals(new LanguageHy, $locale->language());
		$this->assertEquals(new ScriptArmn, $locale->script());
		$this->assertEquals(new TerritoryAm, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('hy_AM', $locale->code());
		$this->assertSame('hy', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="hy"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
