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
		$this->assertEquals(new ScriptTelu, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('తెలుగు', $locale->endonym());
		$this->assertSame('te_IN', $locale->code());
		$this->assertSame('te', $locale->languageTag());
		$this->assertSame('౦౧౨౩౪౫౬౭౮౯', $locale->convertDigits('0123456789'));
	}
}
