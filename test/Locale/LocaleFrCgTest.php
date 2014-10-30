<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleFrCg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrCgTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleFrCg;

		$this->assertEquals(new LanguageFr, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCg, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('fr_CG', $locale->code());
		$this->assertSame('fr-CG', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
