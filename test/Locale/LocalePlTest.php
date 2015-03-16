<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocalePl;

		$this->assertEquals(new LanguagePl, $locale->language());
		$this->assertEquals(new PluralRule9, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryPl, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('pl_PL', $locale->code());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('polski', $locale->endonym());
		$this->assertSame('lang="pl"', $locale->htmlAttributes());
		$this->assertSame('pl', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertsame('polish_ci', $locale->collation());
	}
}
