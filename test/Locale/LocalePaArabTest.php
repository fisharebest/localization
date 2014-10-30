<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePaArab class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePaArabTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocalePaArab;

		$this->assertEquals(new LanguagePa, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('pa_IN@arabic', $locale->code());
		$this->assertSame('pa-Arab', $locale->languageTag());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->convertDigits('0123456789'));
	}
}
