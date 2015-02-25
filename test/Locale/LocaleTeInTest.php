<?php namespace Fisharebest\Localization;

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
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTeIn;

		$this->assertEquals(new LanguageTe, $locale->language());
		$this->assertEquals(new ScriptTelu, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('te_IN', $locale->code());
		$this->assertSame('te', $locale->languageTag());
		$this->assertSame('౦౧౨౩౪౫౬౭౮౯', $locale->digits('0123456789'));
		$this->assertSame('౧,౨౩,౪౫,౬౭౮.౦౯', $locale->number(12345678.09));
		$this->assertSame('lang="te"', $locale->htmlAttributes());
		$this->assertSame('-౧౨౩', $locale->number(-123));
	}
}
