<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBrx;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleBrx class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleBrxTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleBrx;

		$this->assertEquals(new LanguageBrx, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIn, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('brx_IN', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('बड़ो', $locale->endonym());
		$this->assertSame('lang="brx"', $locale->htmlAttributes());
		$this->assertSame('brx', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('1,23,45,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456, 2));
	}
}
