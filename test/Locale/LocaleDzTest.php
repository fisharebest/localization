<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDz class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDzTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDz;

		$this->assertEquals(new LanguageDz, $locale->language());
		$this->assertEquals(new ScriptTibt, $locale->script());
		$this->assertEquals(new TerritoryBt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('རྫོང་ཁ', $locale->endonym());
		$this->assertSame('dz_BT', $locale->code());
		$this->assertSame('dz', $locale->languageTag());
		$this->assertSame('༠༡༢༣༤༥༦༧༨༩', $locale->convertDigits('0123456789'));
	}
}
