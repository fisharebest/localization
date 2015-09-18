<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory419;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleEs419 class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleEs419Test extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleEs419;

		$this->assertEquals(new LanguageEs, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new Territory419, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('es_419', $locale->code());
		$this->assertSame('spanish_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('español latinoamericano', $locale->endonym());
		$this->assertSame('lang="es-419"', $locale->htmlAttributes());
		$this->assertSame('es-419', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56 %', $locale->percent(12.3456));
	}
}
