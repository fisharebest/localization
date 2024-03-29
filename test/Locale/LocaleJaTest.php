<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageJa;
use Fisharebest\Localization\Locale\LocaleJa;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJpan;
use Fisharebest\Localization\Territory\TerritoryJp;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleJa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleJa
 */
class LocaleJaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleJa();

        self::assertEquals(new LanguageJa(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptJpan(), $locale->script());
        self::assertEquals(new TerritoryJp(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ja_JP', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('日本語', $locale->endonym());
        self::assertSame('日本語', $locale->endonymSortable());
        self::assertSame('lang="ja"', $locale->htmlAttributes());
        self::assertSame('ja', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
