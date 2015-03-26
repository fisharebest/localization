<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFil;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPh;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleFil class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleFilTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleFil;

		$this->assertEquals(new LanguageFil, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryPh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('fil_PH', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Filipino', $locale->endonym());
		$this->assertSame('lang="fil"', $locale->htmlAttributes());
		$this->assertSame('fil', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456, 2));
	}
}
