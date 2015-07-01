<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNy;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMw;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleNyMw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleNyMwTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleNyMw;

		$this->assertEquals(new LanguageNy, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryMw, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ny_MW', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="ny"', $locale->htmlAttributes());
		$this->assertSame('ny', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
