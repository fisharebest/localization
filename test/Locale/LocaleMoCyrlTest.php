<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMo;
use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryMd;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleRo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleMoCyrlTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleMoCyrl;

		$this->assertEquals(new LanguageMo, $locale->language());
		$this->assertEquals(new PluralRule5, $locale->pluralRule());
		$this->assertEquals(new ScriptCyrl, $locale->script());
		$this->assertEquals(new TerritoryMd, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('mo_MD@cyrillic', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('лимба молдовеняскэ', $locale->endonym());
		$this->assertSame('lang="mo-Cyrl"', $locale->htmlAttributes());
		$this->assertSame('mo-Cyrl', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56 %', $locale->percent(12.3456));
	}
}
