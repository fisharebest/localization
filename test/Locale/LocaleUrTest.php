<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleUr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleUrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleUr;

		$this->assertEquals(new LanguageUr, $locale->language());
		$this->assertEquals(new ScriptArab, $locale->script());
		$this->assertEquals(new TerritoryPk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('اردو', $locale->endonym());
		$this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->convertDigits('0123456789'));
	}
}
