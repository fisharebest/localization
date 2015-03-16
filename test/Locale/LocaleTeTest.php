<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTeTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTe;

		$this->assertEquals(new LanguageTe, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptTelu, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('te_IN', $locale->code());
		$this->assertSame('౦౧౨౩౪౫౬౭౮౯', $locale->digits('0123456789'));
		$this->assertSame('తెలుగు', $locale->endonym());
		$this->assertSame('lang="te"', $locale->htmlAttributes());
		$this->assertSame('te', $locale->languageTag());
		$this->assertSame('-౧౨౩', $locale->number(-123));
		$this->assertSame('౧,౨౩,౪౫,౬౭౮.౦౯', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
