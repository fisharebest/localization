<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePt;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryBr;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocalePtBr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocalePtBrTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocalePtBr;

		$this->assertEquals(new LanguagePt, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryBr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('pt_BR', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('português do Brasil', $locale->endonym());
		$this->assertSame('lang="pt-BR"', $locale->htmlAttributes());
		$this->assertSame('pt-BR', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456));
	}
}
