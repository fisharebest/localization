<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageFf;
use Fisharebest\Localization\Locale\LocaleFfAdlmGm;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptAdlm;
use Fisharebest\Localization\Territory\TerritoryGm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFfAdlmGm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleFfAdlmGm
 */
class LocaleFfAdlmGmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFfAdlmGm();

        self::assertEquals(new LanguageFf(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptAdlm(), $locale->script());
        self::assertEquals(new TerritoryGm(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ff_GM@adlam', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫', $locale->endonym());
        self::assertSame('𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫', $locale->endonymSortable());
        self::assertSame('lang="ff-Adlm-GM" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ff-Adlm-GM', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12⹁345⹁678.09', $locale->number(12345678.09));
        self::assertSame('1⹁234.56%', $locale->percent(12.3456));
    }
}
