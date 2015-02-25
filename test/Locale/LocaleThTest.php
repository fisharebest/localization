<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleThTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTh;

		$this->assertEquals(new LanguageTh, $locale->language());
		$this->assertEquals(new ScriptThai, $locale->script());
		$this->assertEquals(new TerritoryTh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ไทย', $locale->endonym());
		$this->assertSame('๐๑๒๓๔๕๖๗๘๙', $locale->digits('0123456789'));
		$this->assertSame('๑๒,๓๔๕,๖๗๘.๐๙', $locale->number(12345678.09));
		$this->assertSame('lang="th"', $locale->htmlAttributes());
		$this->assertSame('-๑๒๓', $locale->number(-123));
	}
}
