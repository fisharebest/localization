<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMr;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleMrIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleMrInTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleMrIn;

		$this->assertEquals(new LanguageMr, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptDeva, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('mr_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
		$this->assertSame('lang="mr"', $locale->htmlAttributes());
		$this->assertSame('mr', $locale->languageTag());
		$this->assertSame('-१२३', $locale->number(-123));
		$this->assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
		$this->assertSame('१,२३४.५६%', $locale->percent(12.3456));
	}
}
