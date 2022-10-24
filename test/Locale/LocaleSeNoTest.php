<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSe;
use Fisharebest\Localization\Locale\LocaleSeNo;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSeNo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleSeNo
 */
class LocaleSeNoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSeNo();

        self::assertEquals(new LanguageSe(), $locale->language());
        self::assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryNo(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('se_NO', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('davvisámegiella', $locale->endonym());
        self::assertSame('DAVVISAMEGIELLA', $locale->endonymSortable());
        self::assertSame('lang="se"', $locale->htmlAttributes());
        self::assertSame('se', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
