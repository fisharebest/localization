<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleEsHn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsHnTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleEsHn;

		$this->assertEquals(new LanguageEs, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryHn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('es_HN', $locale->code());
		$this->assertSame('spanish_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="es-HN"', $locale->htmlAttributes());
		$this->assertSame('es-HN', $locale->languageTag());
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('-123', $locale->number(-123));
	}
}
