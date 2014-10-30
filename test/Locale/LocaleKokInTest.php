<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKokIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKokInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleKokIn;

		$this->assertEquals(new LanguageKok, $locale->language());
		$this->assertEquals(new ScriptDeva, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('kok_IN', $locale->code());
		$this->assertSame('kok', $locale->languageTag());
		$this->assertSame('०१२३४५६७८९', $locale->convertDigits('0123456789'));
	}
}
