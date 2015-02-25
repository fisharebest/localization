<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleWae class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleWaeTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleWae;

		$this->assertEquals(new LanguageWae, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCh, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('Walser', $locale->endonym());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('12’345’678,09', $locale->number(12345678.09));
		$this->assertSame('lang="wae"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
	}
}
