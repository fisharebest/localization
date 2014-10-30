<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDeCh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDeChTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDeCh;

		$this->assertEquals(new LanguageDe, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('german2_ci', $locale->collation());
		$this->assertSame('Schweizer Hochdeutsch', $locale->endonym());
		$this->assertSame('de_CH', $locale->code());
		$this->assertSame('de-CH', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
