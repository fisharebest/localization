<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLag;
use Fisharebest\Localization\PluralRule\PluralRuleZeroOneOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTz;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLag class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLagTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLag;

		$this->assertEquals(new LanguageLag, $locale->language());
		$this->assertEquals(new PluralRuleZeroOneOther, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryTz, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('lag_TZ', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Kɨlaangi', $locale->endonym());
		$this->assertSame('lang="lag"', $locale->htmlAttributes());
		$this->assertSame('lag', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456, 2));
	}
}
