<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePrg;
use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePrg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePrgTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocalePrg;

		$this->assertEquals(new LanguagePrg, $locale->language());
		$this->assertEquals(new PluralRule3, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new Territory001, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('prg_001', $locale->code());
		$this->assertSame('latvian_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('prūsiskan', $locale->endonym());
		$this->assertSame('lang="prg"', $locale->htmlAttributes());
		$this->assertSame('prg', $locale->languageTag());
		$this->assertSame('12345 678,09', $locale->number(12345678.09));
		$this->assertSame('1234,56%', $locale->percent(12.3456));
	}
}
