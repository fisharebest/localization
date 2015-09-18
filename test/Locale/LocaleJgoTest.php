<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJgo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCm;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleJgo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleJgoTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleJgo;

		$this->assertEquals(new LanguageJgo, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCm, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('jgo_CM', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Ndaꞌa', $locale->endonym());
		$this->assertSame('lang="jgo"', $locale->htmlAttributes());
		$this->assertSame('jgo', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456));
	}
}
