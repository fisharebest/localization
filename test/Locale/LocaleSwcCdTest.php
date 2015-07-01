<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSwc;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCd;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSwcCd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSwcCdTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSwcCd;

		$this->assertEquals(new LanguageSwc, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCd, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('swc_CD', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="swc"', $locale->htmlAttributes());
		$this->assertSame('swc', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456));
	}
}
