<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSl;

		$this->assertEquals(new LanguageSl, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritorySi, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('slovenian_ci', $locale->collation());
		$this->assertSame('slovenščina', $locale->endonym());
		$this->assertSame('sl_SI', $locale->code());
		$this->assertSame('sl', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
