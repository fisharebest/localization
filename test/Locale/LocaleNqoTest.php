<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageNqo;
use Fisharebest\Localization\Locale\LocaleNqo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptNkoo;
use Fisharebest\Localization\Territory\TerritoryGn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNqo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleNqo
 */
class LocaleNqoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleNqo();

        self::assertEquals(new LanguageNqo(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptNkoo(), $locale->script());
        self::assertEquals(new TerritoryGn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('nqo_GN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('߀߁߂߃߄߅߆߇߈߉', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('ߒߞߏ', $locale->endonym());
        self::assertSame('ߒߞߏ', $locale->endonymSortable());
        self::assertSame('lang="nqo" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('nqo', $locale->languageTag());
        self::assertSame('-߁߂߃', $locale->number(-123));
        self::assertSame('߁߂,߃߄߅,߆߇߈.߀߉', $locale->number(12345678.09));
        self::assertSame('߁,߂߃߄.߅߆%', $locale->percent(12.3456));
    }
}
