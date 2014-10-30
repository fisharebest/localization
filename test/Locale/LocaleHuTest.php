<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleHu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleHuTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleHu;

		$this->assertEquals(new LanguageHu, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryHu, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('hungarian_ci', $locale->collation());
		$this->assertSame('magyar', $locale->endonym());
		$this->assertSame('hu_HU', $locale->code());
		$this->assertSame('hu', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
