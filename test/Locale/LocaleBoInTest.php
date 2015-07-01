<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleBoIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleBoInTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleBoIn;

		$this->assertEquals(new LanguageBo, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('bo_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="bo-IN"', $locale->htmlAttributes());
		$this->assertSame('bo-IN', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
