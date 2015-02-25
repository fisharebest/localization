<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleHeIl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleHeIlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleHeIl;

		$this->assertEquals(new LanguageHe, $locale->language());
		$this->assertEquals(new ScriptHebr, $locale->script());
		$this->assertEquals(new TerritoryIl, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('he_IL', $locale->code());
		$this->assertSame('he', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('lang="he" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('‎-123', $locale->number(-123));
	}
}
