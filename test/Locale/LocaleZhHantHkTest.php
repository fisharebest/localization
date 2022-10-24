<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageZh;
use Fisharebest\Localization\Locale\LocaleZhHantHk;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHant;
use Fisharebest\Localization\Territory\TerritoryHk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleZhHantHk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleZhHantHk
 */
class LocaleZhHantHkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleZhHantHk();

        self::assertEquals(new LanguageZh(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptHant(), $locale->script());
        self::assertEquals(new TerritoryHk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('zh_HK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('繁體中文', $locale->endonym());
        self::assertSame('繁體中文', $locale->endonymSortable());
        self::assertSame('lang="zh-Hant-HK"', $locale->htmlAttributes());
        self::assertSame('zh-Hant-HK', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12345,678.09', $locale->number(12345678.09));
        self::assertSame('1234.56%', $locale->percent(12.3456));
    }
}
