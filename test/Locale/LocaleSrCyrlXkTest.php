<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSr;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryXk;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSrCyrlXk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrCyrlXkTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleSrCyrlXk;

		$this->assertEquals(new LanguageSr, $locale->language());
		$this->assertEquals(new PluralRule7, $locale->pluralRule());
		$this->assertEquals(new ScriptCyrl, $locale->script());
		$this->assertEquals(new TerritoryXk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('sr_XK', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="sr-XK"', $locale->htmlAttributes());
		$this->assertSame('sr-XK', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456));
	}
}
