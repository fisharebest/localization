<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryTn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleArTn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleArTnTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleArTn;

		$this->assertEquals(new LanguageAr, $locale->language());
		$this->assertEquals(new PluralRule12, $locale->pluralRule());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryTn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ar_TN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
		$this->assertSame('lang="ar-TN" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('ar-TN', $locale->languageTag());
		$this->assertSame('١٢.٣٤٥.٦٧٨,٠٩', $locale->number(12345678.09));
		$this->assertSame('‎-١٢٣', $locale->number(-123));
		$this->assertSame('١.٢٣٤,٥٦٪', $locale->percent(12.3456));
	}
}
