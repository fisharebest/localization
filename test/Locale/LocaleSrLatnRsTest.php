<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSr;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryRs;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSrLatnRs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrLatnRsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSrLatnRs;

		$this->assertEquals(new LanguageSr, $locale->language());
		$this->assertEquals(new PluralRule7, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryRs, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('sr_RS@latin', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="sr-Latn"', $locale->htmlAttributes());
		$this->assertSame('sr-Latn', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456));
	}
}
