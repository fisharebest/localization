<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleVai class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleVaiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleVai;

		$this->assertEquals(new LanguageVai, $locale->language());
		$this->assertEquals(new ScriptVaii, $locale->script());
		$this->assertEquals(new TerritoryLr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('꘠꘡꘢꘣꘤꘥꘦꘧꘨꘩', $locale->digits('0123456789'));
		$this->assertSame('ꕙꔤ', $locale->endonym());
		$this->assertSame('lang="vai"', $locale->htmlAttributes());
		$this->assertSame('-꘡꘢꘣', $locale->number(-123));
		$this->assertSame('꘡꘢,꘣꘤꘥,꘦꘧꘨.꘠꘩', $locale->number(12345678.09));
		$this->assertSame('꘡,꘢꘣꘤.꘥꘦%', $locale->percent(12.3456, 2));
	}
}
