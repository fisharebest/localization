<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCkb;
use Fisharebest\Localization\Locale\LocaleCkbIr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCkbIr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCkbIr
 */
class LocaleCkbIrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCkbIr();

        self::assertEquals(new LanguageCkb(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ckb_IR', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('کوردیی ناوەندی', $locale->endonym());
        self::assertSame('کوردیی ناوەندی', $locale->endonymSortable());
        self::assertSame('lang="ckb-IR" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ckb-IR', $locale->languageTag());
        self::assertSame('‏-١٢٣', $locale->number(-123));
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
