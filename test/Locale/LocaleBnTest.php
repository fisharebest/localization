<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleBn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleBnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleBn;

		$this->assertEquals(new LanguageBn, $locale->language());
		$this->assertEquals(new ScriptBeng, $locale->script());
		$this->assertEquals(new TerritoryBd, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('বাংলা', $locale->endonym());
		$this->assertSame('bn_BD', $locale->code());
		$this->assertSame('bn', $locale->languageTag());
		$this->assertSame('০১২৩৪৫৬৭৮৯', $locale->convertDigits('0123456789'));
	}
}
