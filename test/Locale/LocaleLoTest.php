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
		$this->assertEquals(new ScriptLaoo, $locale->script());
		$this->assertEquals(new TerritoryLa, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ລາວ', $locale->endonym());
		$this->assertSame('lo_LA', $locale->code());
		$this->assertSame('lo', $locale->languageTag());
		$this->assertSame('໐໑໒໓໔໕໖໗໘໙', $locale->convertDigits('0123456789'));
	}
}
