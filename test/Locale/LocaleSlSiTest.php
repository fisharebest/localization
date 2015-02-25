<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSlSi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSlSiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSlSi;

		$this->assertEquals(new LanguageSl, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritorySi, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('slovenian_ci', $locale->collation());
		$this->assertSame('sl_SI', $locale->code());
		$this->assertSame('sl', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="sl"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
