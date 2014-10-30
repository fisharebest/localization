<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleRoMd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleRoMdTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleRoMd;

		$this->assertEquals(new LanguageRo, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryMd, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('romanian_ci', $locale->collation());
		$this->assertSame('moldovenească', $locale->endonym());
		$this->assertSame('ro_MD', $locale->code());
		$this->assertSame('ro-MD', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
