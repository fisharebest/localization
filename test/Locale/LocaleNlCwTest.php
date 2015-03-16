<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleNlCw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleNlCwTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleNlCw;

		$this->assertEquals(new LanguageNl, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCw, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('nl_CW', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="nl-CW"', $locale->htmlAttributes());
		$this->assertSame('nl-CW', $locale->languageTag());
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('-123', $locale->number(-123));
	}
}
