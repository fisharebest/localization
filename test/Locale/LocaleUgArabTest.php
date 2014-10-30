<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleUgArab class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleUgArabTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleUgArab;

		$this->assertEquals(new LanguageUg, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryCn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->convertDigits('0123456789'));
	}
}
