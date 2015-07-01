<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySz;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSsTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSs;

		$this->assertEquals(new LanguageSs, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritorySz, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('ss_SZ', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Siswati', $locale->endonym());
		$this->assertSame('lang="ss"', $locale->htmlAttributes());
		$this->assertSame('ss', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('1 234,56%', $locale->percent(12.3456));
	}
}
