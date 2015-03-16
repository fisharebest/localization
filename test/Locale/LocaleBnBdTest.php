<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleBnBd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleBnBdTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleBnBd;

		$this->assertEquals(new LanguageBn, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptBeng, $locale->script());
		$this->assertEquals(new TerritoryBd, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('bn_BD', $locale->code());
		$this->assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
		$this->assertSame('lang="bn"', $locale->htmlAttributes());
		$this->assertSame('bn', $locale->languageTag());
		$this->assertSame('-১২৩', $locale->number(-123));
		$this->assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
