<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleNeNp class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleNeNpTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleNeNp;

		$this->assertEquals(new LanguageNe, $locale->language());
		$this->assertEquals(new ScriptDeva, $locale->script());
		$this->assertEquals(new TerritoryNp, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ne_NP', $locale->code());
		$this->assertSame('ne', $locale->languageTag());
		$this->assertSame('०१२३४५६७८९', $locale->convertDigits('0123456789'));
	}
}
