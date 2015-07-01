<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNb;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySj;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleNbSj class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleNbSjTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleNbSj;

		$this->assertEquals(new LanguageNb, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritorySj, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('nb_SJ', $locale->code());
		$this->assertSame('danish_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="nb-SJ"', $locale->htmlAttributes());
		$this->assertSame('nb-SJ', $locale->languageTag());
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('−123', $locale->number(-123));
		$this->assertSame('1 234,56 %', $locale->percent(12.3456));
	}
}
