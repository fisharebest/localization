<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleMr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleMrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleMr;

		$this->assertEquals(new LanguageMr, $locale->language());
		$this->assertEquals(new ScriptDeva, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('मराठी', $locale->endonym());
		$this->assertSame('mr_IN', $locale->code());
		$this->assertSame('mr', $locale->languageTag());
		$this->assertSame('०१२३४५६७८९', $locale->convertDigits('0123456789'));
	}
}
