<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGu;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGujr;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleGu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleGuTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleGu;

		$this->assertEquals(new LanguageGu, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptGujr, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('gu_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('૦૧૨૩૪૫૬૭૮૯', $locale->digits('0123456789'));
		$this->assertSame('ગુજરાતી', $locale->endonym());
		$this->assertSame('lang="gu"', $locale->htmlAttributes());
		$this->assertSame('gu', $locale->languageTag());
		$this->assertSame('-૧૨૩', $locale->number(-123));
		$this->assertSame('૧,૨૩,૪૫,૬૭૮.૦૯', $locale->number(12345678.09));
		$this->assertSame('૧,૨૩૪.૫૬%', $locale->percent(12.3456));
	}
}
