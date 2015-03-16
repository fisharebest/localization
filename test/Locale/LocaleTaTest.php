<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTa;

		$this->assertEquals(new LanguageTa, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptTaml, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ta_IN', $locale->code());
		$this->assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
		$this->assertSame('தமிழ்', $locale->endonym());
		$this->assertSame('lang="ta"', $locale->htmlAttributes());
		$this->assertSame('ta', $locale->languageTag());
		$this->assertSame('-௧௨௩', $locale->number(-123));
		$this->assertSame('௧,௨௩,௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
		$this->assertsame('unicode_ci', $locale->collation());
	}
}
