<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleCs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleCsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleCs;

		$this->assertEquals(new LanguageCs, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCz, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('croatian_ci', $locale->collation());
		$this->assertSame('čeština', $locale->endonym());
		$this->assertSame('cs_CZ', $locale->code());
		$this->assertSame('cs', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
