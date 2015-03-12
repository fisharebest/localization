<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTt;

		$this->assertEquals(new LanguageTt, $locale->language());
		$this->assertEquals(new ScriptCyrl, $locale->script());
		$this->assertEquals(new TerritoryRu, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('татар', $locale->endonym());
		$this->assertSame('tt_RU', $locale->code());
		$this->assertSame('tt', $locale->languageTag());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('lang="tt"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
