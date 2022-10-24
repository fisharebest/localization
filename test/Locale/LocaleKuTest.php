<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageKu;
use Fisharebest\Localization\Locale\LocaleKu;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleKu
 */
class LocaleKuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKu();

        self::assertEquals(new LanguageKu(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryTr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ku_TR', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('kurdî', $locale->endonym());
        self::assertSame('KURDI', $locale->endonymSortable());
        self::assertSame('lang="ku"', $locale->htmlAttributes());
        self::assertSame('ku', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('%1.234,56', $locale->percent(12.3456));
    }
}
