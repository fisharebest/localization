<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleRwk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleRwkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleRwk;

		$this->assertEquals(new LanguageRwk, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryTz, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('rwk_TZ', $locale->code());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Kiruwa', $locale->endonym());
		$this->assertSame('lang="rwk"', $locale->htmlAttributes());
		$this->assertSame('rwk', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
