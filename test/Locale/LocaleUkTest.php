<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUk;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryUa;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleUk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleUkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleUk;

		$this->assertEquals(new LanguageUk, $locale->language());
		$this->assertEquals(new PluralRule7, $locale->pluralRule());
		$this->assertEquals(new ScriptCyrl, $locale->script());
		$this->assertEquals(new TerritoryUa, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('українська', $locale->endonym());
		$this->assertSame('lang="uk"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('1 234,56%', $locale->percent(12.3456));
	}
}
