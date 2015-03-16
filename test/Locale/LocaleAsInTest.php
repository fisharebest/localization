<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleAsIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleAsInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleAsIn;

		$this->assertEquals(new LanguageAs, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptBeng, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('as_IN', $locale->code());
		$this->assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
		$this->assertSame('lang="as"', $locale->htmlAttributes());
		$this->assertSame('as', $locale->languageTag());
		$this->assertSame('-১২৩', $locale->number(-123));
		$this->assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
