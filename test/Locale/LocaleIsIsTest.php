<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleIsIs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleIsIsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleIsIs;

		$this->assertEquals(new LanguageIs, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIs, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('icelandic_ci', $locale->collation());
		$this->assertSame('is_IS', $locale->code());
		$this->assertSame('is', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('lang="is"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
