<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDk;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDaDk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDaDkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDaDk;

		$this->assertEquals(new LanguageDa, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryDk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('da_DK', $locale->code());
		$this->assertSame('danish_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="da"', $locale->htmlAttributes());
		$this->assertSame('da', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56 %', $locale->percent(12.3456, 2));
	}
}
