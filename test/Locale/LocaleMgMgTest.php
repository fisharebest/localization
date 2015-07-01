<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMg;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMg;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleMgMg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleMgMgTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleMgMg;

		$this->assertEquals(new LanguageMg, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryMg, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('mg_MG', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="mg"', $locale->htmlAttributes());
		$this->assertSame('mg', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
