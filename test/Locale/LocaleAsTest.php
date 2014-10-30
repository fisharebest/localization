<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleAs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleAsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleAs;

		$this->assertEquals(new LanguageAs, $locale->language());
		$this->assertEquals(new ScriptBeng, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('অসমীয়া', $locale->endonym());
		$this->assertSame('as_IN', $locale->code());
		$this->assertSame('as', $locale->languageTag());
		$this->assertSame('০১২৩৪৫৬৭৮৯', $locale->convertDigits('0123456789'));
	}
}
