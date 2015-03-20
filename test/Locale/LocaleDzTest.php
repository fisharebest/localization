<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDz class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDzTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDz;

		$this->assertEquals(new LanguageDz, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptTibt, $locale->script());
		$this->assertEquals(new TerritoryBt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('dz_BT', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('༠༡༢༣༤༥༦༧༨༩', $locale->digits('0123456789'));
		$this->assertSame('རྫོང་ཁ', $locale->endonym());
		$this->assertSame('lang="dz"', $locale->htmlAttributes());
		$this->assertSame('dz', $locale->languageTag());
		$this->assertSame('-༡༢༣', $locale->number(-123));
		$this->assertSame('༡,༢༣,༤༥,༦༧༨.༠༩', $locale->number(12345678.09));
		$this->assertSame('༡,༢༣༤.༥༦ %', $locale->percent(12.3456, 2));
	}
}
