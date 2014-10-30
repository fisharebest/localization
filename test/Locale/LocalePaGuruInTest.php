<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePaGuruIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePaGuruInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocalePaGuruIn;

		$this->assertEquals(new LanguagePa, $locale->language());
		$this->assertEquals(new ScriptGuru, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('pa_IN', $locale->code());
		$this->assertSame('pa', $locale->languageTag());
		$this->assertSame('੦੧੨੩੪੫੬੭੮੯', $locale->convertDigits('0123456789'));
	}
}
