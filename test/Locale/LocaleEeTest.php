<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleEe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleEeTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleEe;

		$this->assertEquals(new LanguageEe, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryGh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('eʋegbe', $locale->endonym());
		$this->assertSame('ee_GH', $locale->code());
		$this->assertSame('ee', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
