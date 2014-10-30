<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePlTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocalePl;

		$this->assertEquals(new LanguagePl, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryPl, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('polish_ci', $locale->collation());
		$this->assertSame('polski', $locale->endonym());
		$this->assertSame('pl_PL', $locale->code());
		$this->assertSame('pl', $locale->languageTag());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
