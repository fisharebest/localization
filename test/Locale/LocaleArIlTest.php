<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\Locale\LocaleArIl;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleArIl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleArIl
 */
class LocaleArIlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleArIl();

        self::assertEquals(new LanguageAr(), $locale->language());
        self::assertEquals(new PluralRule12(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIl(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ar_IL', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('العربية', $locale->endonym());
        self::assertSame('العربية', $locale->endonymSortable());
        self::assertSame('lang="ar-IL" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ar-IL', $locale->languageTag());
        self::assertSame('؜-١٢٣', $locale->number(-123));
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
