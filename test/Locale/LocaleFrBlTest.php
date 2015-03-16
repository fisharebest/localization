<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleFrBl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrBlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleFrBl;

		$this->assertEquals(new LanguageFr, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryBl, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('fr_BL', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="fr-BL"', $locale->htmlAttributes());
		$this->assertSame('fr-BL', $locale->languageTag());
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('-123', $locale->number(-123));
	}
}
