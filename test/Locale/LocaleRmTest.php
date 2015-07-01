<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRm;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCh;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleRm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleRmTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleRm;

		$this->assertEquals(new LanguageRm, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('rm_CH', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('rumantsch', $locale->endonym());
		$this->assertSame('lang="rm"', $locale->htmlAttributes());
		$this->assertSame('rm', $locale->languageTag());
		$this->assertSame('12’345’678.09', $locale->number(12345678.09));
		$this->assertSame('−123', $locale->number(-123));
		$this->assertSame('1’234.56 %', $locale->percent(12.3456));
	}
}
