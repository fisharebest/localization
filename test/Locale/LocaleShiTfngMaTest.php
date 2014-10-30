<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleShiTfngMa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleShiTfngMaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleShiTfngMa;

		$this->assertEquals(new LanguageShi, $locale->language());
		$this->assertEquals(new ScriptTfng, $locale->script());
		$this->assertEquals(new TerritoryMa, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ⵜⴰⵎⴰⵣⵉⵖⵜ', $locale->endonym());
		$this->assertSame('shi_MA', $locale->code());
		$this->assertSame('shi', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
