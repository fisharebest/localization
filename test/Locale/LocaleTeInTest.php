<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTelu;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTeIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTeInTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleTeIn;

		$this->assertEquals(new LanguageTe, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptTelu, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('te_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('౦౧౨౩౪౫౬౭౮౯', $locale->digits('0123456789'));
		$this->assertSame('lang="te"', $locale->htmlAttributes());
		$this->assertSame('te', $locale->languageTag());
		$this->assertSame('-౧౨౩', $locale->number(-123));
		$this->assertSame('౧,౨౩,౪౫,౬౭౮.౦౯', $locale->number(12345678.09));
		$this->assertSame('౧,౨౩౪.౫౬%', $locale->percent(12.3456));
	}
}
