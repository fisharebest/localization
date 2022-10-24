<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageShi;
use Fisharebest\Localization\Locale\LocaleShi;
use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptTfng;
use Fisharebest\Localization\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleShi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleShi
 */
class LocaleShiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleShi();

        self::assertEquals(new LanguageShi(), $locale->language());
        self::assertEquals(new PluralRuleTachelhit(), $locale->pluralRule());
        self::assertEquals(new ScriptTfng(), $locale->script());
        self::assertEquals(new TerritoryMa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('shi_MA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ⵜⴰⵛⵍⵃⵉⵜ', $locale->endonym());
        self::assertSame('ⵜⴰⵛⵍⵃⵉⵜ', $locale->endonymSortable());
        self::assertSame('lang="shi" dir="ltr"', $locale->htmlAttributes());
        self::assertSame('shi', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
