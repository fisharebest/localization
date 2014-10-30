<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleZhHansSg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleZhHansSgTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleZhHansSg;

		$this->assertEquals(new LanguageZh, $locale->language());
		$this->assertEquals(new ScriptHans, $locale->script());
		$this->assertEquals(new TerritorySg, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->convertDigits('0123456789'));
	}
}
