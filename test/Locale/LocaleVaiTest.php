<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleVai class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleVaiTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleVai;

		$this->assertEquals(new LanguageVai, $locale->language());
		$this->assertEquals(new ScriptVaii, $locale->script());
		$this->assertEquals(new TerritoryLr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ꕙꔤ', $locale->endonym());
		$this->assertSame('꘠꘡꘢꘣꘤꘥꘦꘧꘨꘩', $locale->convertDigits('0123456789'));
	}
}
