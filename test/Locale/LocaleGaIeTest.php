<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGa;
use Fisharebest\Localization\PluralRule\PluralRule11;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIe;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleGaIe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleGaIeTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleGaIe;

		$this->assertEquals(new LanguageGa, $locale->language());
		$this->assertEquals(new PluralRule11, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIe, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ga_IE', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="ga"', $locale->htmlAttributes());
		$this->assertSame('ga', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
