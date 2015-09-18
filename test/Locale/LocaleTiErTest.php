<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTi;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEr;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleTiEr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleTiErTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleTiEr;

		$this->assertEquals(new LanguageTi, $locale->language());
		$this->assertEquals(new PluralRule2, $locale->pluralRule());
		$this->assertEquals(new ScriptEthi, $locale->script());
		$this->assertEquals(new TerritoryEr, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="ti-ER"', $locale->htmlAttributes());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
