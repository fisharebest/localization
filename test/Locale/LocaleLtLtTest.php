<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLtLt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLtLtTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLtLt;

		$this->assertEquals(new LanguageLt, $locale->language());
		$this->assertEquals(new PluralRule6, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryLt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('lt_LT', $locale->code());
		$this->assertSame('lithuanian_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="lt"', $locale->htmlAttributes());
		$this->assertSame('lt', $locale->languageTag());
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('−123', $locale->number(-123));
		$this->assertSame('1 234,56 %', $locale->percent(12.3456, 2));
	}
}
