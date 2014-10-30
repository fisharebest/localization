<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKmKh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKmKhTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleKmKh;

		$this->assertEquals(new LanguageKm, $locale->language());
		$this->assertEquals(new ScriptKhmr, $locale->script());
		$this->assertEquals(new TerritoryKh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('km_KH', $locale->code());
		$this->assertSame('km', $locale->languageTag());
		$this->assertSame('០១២៣៤៥៦៧៨៩', $locale->convertDigits('0123456789'));
	}
}
