<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguagePa;
use Fisharebest\Localization\Locale\LocalePaArab;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePaArab class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocalePaArab
 */
class LocalePaArabTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePaArab();

        self::assertEquals(new LanguagePa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pa_IN@arabic', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('ਪੰਜਾਬੀ', $locale->endonym());
        self::assertSame('ਪੰਜਾਬੀ', $locale->endonymSortable());
        self::assertSame('lang="pa-Arab" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('pa-Arab', $locale->languageTag());
        self::assertSame('-١٢٣', $locale->number(-123));
        self::assertSame('١,٢٣,٤٥,٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١,٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
