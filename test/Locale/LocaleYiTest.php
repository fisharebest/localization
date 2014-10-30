<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleYi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleYiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleYi;

		$this->assertEquals(new LanguageYi, $locale->language());
		$this->assertEquals(new ScriptHebr, $locale->script());
		$this->assertEquals(new Territory001, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ייִדיש', $locale->endonym());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
