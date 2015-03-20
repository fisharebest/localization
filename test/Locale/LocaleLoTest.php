<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLoTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLo;

		$this->assertEquals(new LanguageLo, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptLaoo, $locale->script());
		$this->assertEquals(new TerritoryLa, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('lo_LA', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('໐໑໒໓໔໕໖໗໘໙', $locale->digits('0123456789'));
		$this->assertSame('ລາວ', $locale->endonym());
		$this->assertSame('lang="lo"', $locale->htmlAttributes());
		$this->assertSame('lo', $locale->languageTag());
		$this->assertSame('-໑໒໓', $locale->number(-123));
		$this->assertSame('໑໒.໓໔໕.໖໗໘,໐໙', $locale->number(12345678.09));
		$this->assertSame('໑.໒໓໔,໕໖%', $locale->percent(12.3456, 2));
	}
}
