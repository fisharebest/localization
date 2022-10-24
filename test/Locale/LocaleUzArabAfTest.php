<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageUz;
use Fisharebest\Localization\Locale\LocaleUzArabAf;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryAf;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleUzArabAf class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleUzArabAf
 */
class LocaleUzArabAfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleUzArabAf();

        self::assertEquals(new LanguageUz(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryAf(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('uz_AF@arabic', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('o‘zbek', $locale->endonym());
        self::assertSame('OZBEK', $locale->endonymSortable());
        self::assertSame('lang="uz-Arab-AF" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('uz-Arab-AF', $locale->languageTag());
        self::assertSame('-١٢٣', $locale->number(-123));
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
