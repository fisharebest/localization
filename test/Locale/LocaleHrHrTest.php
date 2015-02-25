<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleHrHr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleHrHrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleHrHr;

		$this->assertEquals(new LanguageHr, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryHr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('croatian_ci', $locale->collation());
		$this->assertSame('hr_HR', $locale->code());
		$this->assertSame('hr', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="hr"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
