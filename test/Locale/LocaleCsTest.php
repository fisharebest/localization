<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleCs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleCsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleCs;

		$this->assertEquals(new LanguageCs, $locale->language());
		$this->assertEquals(new PluralRule8, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCz, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('cs_CZ', $locale->code());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('čeština', $locale->endonym());
		$this->assertSame('lang="cs"', $locale->htmlAttributes());
		$this->assertSame('cs', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertsame('croatian_ci', $locale->collation());
	}
}
