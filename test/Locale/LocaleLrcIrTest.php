<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageLrc;
use Fisharebest\Localization\Locale\LocaleLrcIr;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleLrcIr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleLrcIr
 */
class LocaleLrcIrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleLrcIr();

        self::assertEquals(new LanguageLrc(), $locale->language());
        self::assertEquals(new PluralRule12(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('lrc_IR', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('لۊری شومالی', $locale->endonym());
        self::assertSame('لۊری شومالی', $locale->endonymSortable());
        self::assertSame('lang="lrc" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('lrc', $locale->languageTag());
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
