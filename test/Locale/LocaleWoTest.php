<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageWo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleXh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleWoTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleWo;

		$this->assertEquals(new LanguageWo, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritorySn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('wo_SN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Wolof', $locale->endonym());
		$this->assertSame('lang="wo"', $locale->htmlAttributes());
		$this->assertSame('wo', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
