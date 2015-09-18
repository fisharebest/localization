<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGd;
use Fisharebest\Localization\PluralRule\PluralRule4;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGb;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleGd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleGdTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleGd;

		$this->assertEquals(new LanguageGd, $locale->language());
		$this->assertEquals(new PluralRule4, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryGb, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('gd_GB', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Gàidhlig', $locale->endonym());
		$this->assertSame('lang="gd"', $locale->htmlAttributes());
		$this->assertSame('gd', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
