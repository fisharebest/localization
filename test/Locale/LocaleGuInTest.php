<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleGuIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleGuInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleGuIn;

		$this->assertEquals(new LanguageGu, $locale->language());
		$this->assertEquals(new ScriptGujr, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('gu_IN', $locale->code());
		$this->assertSame('gu', $locale->languageTag());
		$this->assertSame('૦૧૨૩૪૫૬૭૮૯', $locale->convertDigits('0123456789'));
	}
}
