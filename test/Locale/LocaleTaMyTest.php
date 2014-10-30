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
		$this->assertEquals(new ScriptTaml, $locale->script());
		$this->assertEquals(new TerritoryMy, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ta_MY', $locale->code());
		$this->assertSame('ta-MY', $locale->languageTag());
		$this->assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->convertDigits('0123456789'));
	}
}
