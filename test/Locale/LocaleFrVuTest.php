<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFr;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryVu;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleFrVu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrVuTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleFrVu;

		$this->assertEquals(new LanguageFr, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryVu, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('fr_VU', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="fr-VU"', $locale->htmlAttributes());
		$this->assertSame('fr-VU', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('1 234,56 %', $locale->percent(12.3456));
	}
}
