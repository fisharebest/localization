<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleMlIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleMlInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleMlIn;

		$this->assertEquals(new LanguageMl, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptMlym, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ml_IN', $locale->code());
		$this->assertSame('൦൧൨൩൪൫൬൭൮൯', $locale->digits('0123456789'));
		$this->assertSame('lang="ml"', $locale->htmlAttributes());
		$this->assertSame('ml', $locale->languageTag());
		$this->assertSame('-൧൨൩', $locale->number(-123));
		$this->assertSame('൧,൨൩,൪൫,൬൭൮.൦൯', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
