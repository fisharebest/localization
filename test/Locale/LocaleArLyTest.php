<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryLy;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleArLy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleArLyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleArLy();

        $this->assertEquals(new LanguageAr(), $locale->language());
        $this->assertEquals(new PluralRule12(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryLy(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ar_LY', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ar-LY" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('ar-LY', $locale->languageTag());
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('‎-123', $locale->number(-123));
        $this->assertSame('1.234,56‎%‎', $locale->percent(12.3456));
    }
}
