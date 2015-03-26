<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDua;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCm;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleDua class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleDuaTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleDua;

		$this->assertEquals(new LanguageDua, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryCm, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('dua_CM', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('duálá', $locale->endonym());
		$this->assertSame('lang="dua"', $locale->htmlAttributes());
		$this->assertSame('dua', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('1 234,56 %', $locale->percent(12.3456, 2));
	}
}
