<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleEsMx class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsMxTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleEsMx;

		$this->assertEquals(new LanguageEs, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryMx, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('spanish_ci', $locale->collation());
		$this->assertSame('español de México', $locale->endonym());
		$this->assertSame('es_MX', $locale->code());
		$this->assertSame('es-MX', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
