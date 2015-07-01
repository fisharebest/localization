<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAz;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleAzCyrl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleAzCyrlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleAzCyrl;

		$this->assertEquals(new LanguageAz, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptCyrl, $locale->script());
		$this->assertEquals(new TerritoryIr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('az_IR@cyrillic', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="az-Cyrl"', $locale->htmlAttributes());
		$this->assertSame('az-Cyrl', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456));
	}
}
