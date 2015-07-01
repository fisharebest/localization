<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSq;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryXk;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleSqXk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleSqXkTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleSqXk;

		$this->assertEquals(new LanguageSq, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryXk, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('sq_XK', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="sq-XK"', $locale->htmlAttributes());
		$this->assertSame('sq-XK', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12 345 678,09', $locale->number(12345678.09));
		$this->assertSame('1 234,56%', $locale->percent(12.3456));
	}
}
