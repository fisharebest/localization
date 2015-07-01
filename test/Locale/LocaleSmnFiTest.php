<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSmn;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFi;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSmnFi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSmnFiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSmnFi;

		$this->assertEquals(new LanguageSmn, $locale->language());
		$this->assertEquals(new PluralRuleOneTwoOther, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryFi, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('smn_FI', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="smn"', $locale->htmlAttributes());
		$this->assertSame('smn', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
