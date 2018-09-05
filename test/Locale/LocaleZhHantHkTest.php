<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageZh;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHant;
use Fisharebest\Localization\Territory\TerritoryHk;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleZhHantHk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleZhHantHkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleZhHantHk();

        $this->assertEquals(new LanguageZh(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptHant(), $locale->script());
        $this->assertEquals(new TerritoryHk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="zh-Hant-HK"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12345,678.09', $locale->number(12345678.09));
        $this->assertSame('1234.56%', $locale->percent(12.3456));
    }
}
