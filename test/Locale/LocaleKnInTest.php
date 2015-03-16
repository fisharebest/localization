<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKnIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKnInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleKnIn;

		$this->assertEquals(new LanguageKn, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptKnda, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('kn_IN', $locale->code());
		$this->assertSame('೦೧೨೩೪೫೬೭೮೯', $locale->digits('0123456789'));
		$this->assertSame('lang="kn"', $locale->htmlAttributes());
		$this->assertSame('kn', $locale->languageTag());
		$this->assertSame('-೧೨೩', $locale->number(-123));
		$this->assertSame('೧೨,೩೪೫,೬೭೮.೦೯', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
