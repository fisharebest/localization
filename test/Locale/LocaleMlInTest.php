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
		$this->assertEquals(new ScriptMlym, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ml_IN', $locale->code());
		$this->assertSame('ml', $locale->languageTag());
		$this->assertSame('൦൧൨൩൪൫൬൭൮൯', $locale->convertDigits('0123456789'));
	}
}
