<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageYi;
use Fisharebest\Localization\Locale\LocaleYi;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleYi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleYi
 */
class LocaleYiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleYi();

        self::assertEquals(new LanguageYi(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptHebr(), $locale->script());
        self::assertEquals(new Territory001(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('yi_001', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('ייִדיש', $locale->endonym());
        self::assertSame('ייִדיש', $locale->endonymSortable());
        self::assertSame('lang="yi" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('yi', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
