<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePtTl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePtTlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocalePtTl;

		$this->assertEquals(new LanguagePt, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryTl, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('pt_TL', $locale->code());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="pt-TL"', $locale->htmlAttributes());
		$this->assertSame('pt-TL', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
