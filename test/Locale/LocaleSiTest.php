<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSi;

		$this->assertEquals(new LanguageSi, $locale->language());
		$this->assertEquals(new ScriptSinh, $locale->script());
		$this->assertEquals(new TerritoryLk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('sinhala_ci', $locale->collation());
		$this->assertSame('සිංහල', $locale->endonym());
		$this->assertSame('si_LK', $locale->code());
		$this->assertSame('si', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
