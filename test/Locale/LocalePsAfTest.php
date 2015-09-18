<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryAf;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePsAf class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePsAfTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocalePsAf;

		$this->assertEquals(new LanguagePs, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryAf, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ps_AF', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
		$this->assertSame('lang="ps-AF" dir="rtl"', $locale->htmlAttributes());
		$this->assertSame('ps-AF', $locale->languageTag());
		$this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
		$this->assertSame('‎-‎١٢٣', $locale->number(-123));
		$this->assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
	}
}
