<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePt;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLu;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePtLu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePtLuTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocalePtLu;

		$this->assertEquals(new LanguagePt, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryLu, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('pt_LU', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="pt-LU"', $locale->htmlAttributes());
		$this->assertSame('pt-LU', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456));
	}
}
