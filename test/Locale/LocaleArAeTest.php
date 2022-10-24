<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\Locale\LocaleArAe;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryAe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleArAe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleArAe
 */
class LocaleArAeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleArAe();

        self::assertEquals(new LanguageAr(), $locale->language());
        self::assertEquals(new PluralRule12(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryAe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ar_AE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('العربية', $locale->endonym());
        self::assertSame('العربية', $locale->endonymSortable());
        self::assertSame('lang="ar-AE" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-AE', $locale->languageTag());
        self::assertSame('‎-١٢٣', $locale->number(-123));
        self::assertSame('١٢,٣٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame('١,٢٣٤.٥٦‎%‎', $locale->percent(12.3456));
    }
}
