<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocalePa;

		$this->assertEquals(new LanguagePa, $locale->language());
		$this->assertEquals(new ScriptGuru, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('ਪੰਜਾਬੀ', $locale->endonym());
		$this->assertSame('pa_IN', $locale->code());
		$this->assertSame('pa', $locale->languageTag());
		$this->assertSame('੦੧੨੩੪੫੬੭੮੯', $locale->digits('0123456789'));
		$this->assertSame('੧,੨੩,੪੫,੬੭੮.੦੯', $locale->number(12345678.09));
		$this->assertSame('lang="pa"', $locale->htmlAttributes());
		$this->assertSame('-੧੨੩', $locale->number(-123));
	}
}
