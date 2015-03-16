<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKoKr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKoKrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleKoKr;

		$this->assertEquals(new LanguageKo, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptKore, $locale->script());
		$this->assertEquals(new TerritoryKr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ko_KR', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="ko"', $locale->htmlAttributes());
		$this->assertSame('ko', $locale->languageTag());
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('-123', $locale->number(-123));
	}
}
