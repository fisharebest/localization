<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageIu;
use Fisharebest\Localization\Locale\LocaleIu;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptCans;
use Fisharebest\Localization\Territory\TerritoryCa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleIu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleIu
 */
class LocaleIuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleIu();

        self::assertEquals(new LanguageIu(), $locale->language());
        self::assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        self::assertEquals(new ScriptCans(), $locale->script());
        self::assertEquals(new TerritoryCa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('iu_CA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ᐃᓄᒃᑎᑐᑦ', $locale->endonym());
        self::assertSame('ᐃᓄᒃᑎᑐᑦ', $locale->endonymSortable());
        self::assertSame('lang="iu"', $locale->htmlAttributes());
        self::assertSame('iu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
