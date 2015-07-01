<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryBo;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleEsBo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsBoTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleEsBo;

		$this->assertEquals(new LanguageEs, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryBo, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('es_BO', $locale->code());
		$this->assertSame('spanish_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="es-BO"', $locale->htmlAttributes());
		$this->assertSame('es-BO', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56 %', $locale->percent(12.3456));
	}
}
