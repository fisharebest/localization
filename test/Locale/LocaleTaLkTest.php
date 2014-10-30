<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTaLk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTaLkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleTaLk;

		$this->assertEquals(new LanguageTa, $locale->language());
		$this->assertEquals(new ScriptTaml, $locale->script());
		$this->assertEquals(new TerritoryLk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ta_LK', $locale->code());
		$this->assertSame('ta-LK', $locale->languageTag());
		$this->assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->convertDigits('0123456789'));
	}
}
