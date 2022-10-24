<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageFf;
use Fisharebest\Localization\Locale\LocaleFfAdlmSl;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptAdlm;
use Fisharebest\Localization\Territory\TerritorySl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFfAdlmSl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleFfAdlmSl
 */
class LocaleFfAdlmSlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFfAdlmSl();

        self::assertEquals(new LanguageFf(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptAdlm(), $locale->script());
        self::assertEquals(new TerritorySl(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ff_SL@adlam', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫', $locale->endonym());
        self::assertSame('𞤊𞤵𞤤𞤬𞤵𞤤𞤣𞤫', $locale->endonymSortable());
        self::assertSame('lang="ff-Adlm-SL" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ff-Adlm-SL', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12⹁345⹁678.09', $locale->number(12345678.09));
        self::assertSame('1⹁234.56%', $locale->percent(12.3456));
    }
}
