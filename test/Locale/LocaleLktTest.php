<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLkt;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryUs;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleLkt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleLktTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleLkt;

		$this->assertEquals(new LanguageLkt, $locale->language());
		$this->assertEquals(new PluralRule0, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryUs, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('lkt_US', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Lakȟólʼiyapi', $locale->endonym());
		$this->assertSame('lang="lkt"', $locale->htmlAttributes());
		$this->assertSame('lkt', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456, 2));
	}
}
