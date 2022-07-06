<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryDz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleArDz class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleArDzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleArDz();

        $this->assertEquals(new LanguageAr(), $locale->language());
        $this->assertEquals(new PluralRule12(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryDz(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ar_DZ', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ar-DZ" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('ar-DZ', $locale->languageTag());
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('‎-123', $locale->number(-123));
        $this->assertSame('1.234,56‎%‎', $locale->percent(12.3456));
    }
}
