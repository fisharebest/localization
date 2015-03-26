<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFur;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIt;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleFurIt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class LocaleFurItTest extends TestCase {
	/**
	 * Test the properties
	 *
	 * @return void
	 */
	public function testProperties() {
		$locale = new LocaleFurIt;

		$this->assertEquals(new LanguageFur, $locale->language());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new TerritoryIt, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('fur_IT', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('lang="fur"', $locale->htmlAttributes());
		$this->assertSame('fur', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12.345.678,09', $locale->number(12345678.09));
		$this->assertSame('1.234,56%', $locale->percent(12.3456, 2));
	}
}
