<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Unit tests for the LocaleIo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleIoTest extends TestCase {
	/**
	 * Test the properties
	 */
	public function testProperties() {
		$locale = new LocaleIo;

		$this->assertEquals(new LanguageIo, $locale->language());
		$this->assertEquals(new PluralRule1, $locale->pluralRule());
		$this->assertEquals(new ScriptLatn, $locale->script());
		$this->assertEquals(new Territory001, $locale->territory());
		$this->assertNull($locale->variant());
		$this->assertSame('io_001', $locale->code());
		$this->assertSame('unicode_ci', $locale->collation());
		$this->assertSame('0123456789', $locale->digits('0123456789'));
		$this->assertSame('Ido', $locale->endonym());
		$this->assertSame('lang="io"', $locale->htmlAttributes());
		$this->assertSame('io', $locale->languageTag());
		$this->assertSame('-123', $locale->number(-123));
		$this->assertSame('12,345,678.09', $locale->number(12345678.09));
		$this->assertSame('1,234.56%', $locale->percent(12.3456));
	}
}
