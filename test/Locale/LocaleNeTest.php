<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleNe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleNeTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleNe;

		$this->assertEquals(new LanguageNe, $locale->language());
		$this->assertEquals(new ScriptDeva, $locale->script());
		$this->assertEquals(new TerritoryNp, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertsame('unicode_ci', $locale->collation());
		$this->assertSame('नेपाली', $locale->endonym());
		$this->assertSame('ne_NP', $locale->code());
		$this->assertSame('ne', $locale->languageTag());
		$this->assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
		$this->assertSame('१२,३४५,६७८.०९', $locale->number(12345678.09));
		$this->assertSame('lang="ne"', $locale->htmlAttributes());
		$this->assertSame('-१२३', $locale->number(-123));
	}
}
