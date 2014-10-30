<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLt;

		$this->assertEquals(new LanguageLt, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryLt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('lithuanian_ci', $locale->collation());
		$this->assertSame('lietuvių', $locale->endonym());
		$this->assertSame('lt_LT', $locale->code());
		$this->assertSame('lt', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
