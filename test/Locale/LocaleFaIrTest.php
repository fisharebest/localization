<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageFa;
use Fisharebest\Localization\Locale\LocaleFaIr;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFaIr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleFaIr
 */
class LocaleFaIrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFaIr();

        self::assertEquals(new LanguageFa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('fa_IR', $locale->code());
        self::assertSame('persian_ci', $locale->collation());
        self::assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('فارسی', $locale->endonym());
        self::assertSame('فارسی', $locale->endonymSortable());
        self::assertSame('lang="fa" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('fa', $locale->languageTag());
        self::assertSame('‎−۱۲۳', $locale->number(-123));
        self::assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        self::assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
