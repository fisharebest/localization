<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleQuPe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleQuPeTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleQuPe;

		$this->assertEquals(new LanguageQu, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryPe, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('qu_PE', $locale->code());
		$this->assertSame('qu', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
