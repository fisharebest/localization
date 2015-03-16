<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleAr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleArTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleAr;

		$this->assertEquals(new LanguageAr, $locale->language());
		$this->assertEquals(new PluralRule12, $locale->pluralRule());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new Territory001, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ar_001', $locale->code());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
		$this->assertSame('العربية', $locale->endonym());
		$this->assertSame('lang="ar" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('ar', $locale->languageTag());
		$this->assertSame('‏-١٢٣', $locale->number(-123));
		$this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
