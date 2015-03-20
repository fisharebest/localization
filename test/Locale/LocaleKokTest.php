<?php namespace Fisharebest\Localization;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleKok class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleKokTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleKok;

		$this->assertEquals(new LanguageKok, $locale->language());
		$this->assertEquals(new ScriptDeva, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('kok_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
		$this->assertSame('कोंकणी', $locale->endonym());
		$this->assertSame('lang="kok"', $locale->htmlAttributes());
		$this->assertSame('kok', $locale->languageTag());
		$this->assertSame('-१२३', $locale->number(-123));
		$this->assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
		$this->assertSame('१,२३४.५६%', $locale->percent(12.3456, 2));
	}
}
