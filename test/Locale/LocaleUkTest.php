<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleUk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleUkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleUk;

		$this->assertEquals(new LanguageUk, $locale->language());
		$this->assertEquals(new ScriptCyrl, $locale->script());
		$this->assertEquals(new TerritoryUa, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('українська', $locale->endonym());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
