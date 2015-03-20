<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleMyMm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleMyMmTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleMyMm;

		$this->assertEquals(new LanguageMy, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptMymr, $locale->script());
		$this->assertEquals(new TerritoryMm, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('my_MM', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('၀၁၂၃၄၅၆၇၈၉', $locale->digits('0123456789'));
		$this->assertSame('lang="my"', $locale->htmlAttributes());
		$this->assertSame('my', $locale->languageTag());
		$this->assertSame('-၁၂၃', $locale->number(-123));
		$this->assertSame('၁၂၃၄၅,၆၇၈.၀၉', $locale->number(12345678.09));
		$this->assertSame('၁၂၃၄.၅၆%', $locale->percent(12.3456, 2));
	}
}
