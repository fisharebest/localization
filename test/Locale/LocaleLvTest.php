<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLv;
use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLv;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLv class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLvTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleLv;

		$this->assertEquals(new LanguageLv, $locale->language());
		$this->assertEquals(new PluralRule3, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryLv, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('lv_LV', $locale->code());
		$this->assertSame('latvian_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('latviešu', $locale->endonym());
		$this->assertSame('lang="lv"', $locale->htmlAttributes());
		$this->assertSame('lv', $locale->languageTag());
		$this->assertSame('12345 678,09', $locale->number(12345678.09));
		$this->assertSame('1234,56%', $locale->percent(12.3456));
	}
}
