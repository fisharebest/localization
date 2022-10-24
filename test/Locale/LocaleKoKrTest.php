<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageKo;
use Fisharebest\Localization\Locale\LocaleKoKr;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKore;
use Fisharebest\Localization\Territory\TerritoryKr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKoKr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleKoKr
 */
class LocaleKoKrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKoKr();

        self::assertEquals(new LanguageKo(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptKore(), $locale->script());
        self::assertEquals(new TerritoryKr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ko_KR', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('한국어', $locale->endonym());
        self::assertSame('한국어', $locale->endonymSortable());
        self::assertSame('lang="ko"', $locale->htmlAttributes());
        self::assertSame('ko', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
