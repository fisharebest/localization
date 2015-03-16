<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTaMy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTaMyTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTaMy;

		$this->assertEquals(new LanguageTa, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptTaml, $locale->script());
		$this->assertEquals(new TerritoryMy, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ta_MY', $locale->code());
		$this->assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
		$this->assertSame('lang="ta-MY"', $locale->htmlAttributes());
		$this->assertSame('ta-MY', $locale->languageTag());
		$this->assertSame('-௧௨௩', $locale->number(-123));
		$this->assertSame('௧௨,௩௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
