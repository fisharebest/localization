<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTiEt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTiEtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTiEt;

		$this->assertEquals(new LanguageTi, $locale->language());
		$this->assertEquals(new ScriptEthi, $locale->script());
		$this->assertEquals(new TerritoryEt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
