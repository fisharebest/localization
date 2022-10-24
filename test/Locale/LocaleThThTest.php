<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTh;
use Fisharebest\Localization\Locale\LocaleThTh;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptThai;
use Fisharebest\Localization\Territory\TerritoryTh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleThTh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleThTh
 */
class LocaleThThTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleThTh();

        self::assertEquals(new LanguageTh(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptThai(), $locale->script());
        self::assertEquals(new TerritoryTh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('th_TH', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('๐๑๒๓๔๕๖๗๘๙', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ไทย', $locale->endonym());
        self::assertSame('ไทย', $locale->endonymSortable());
        self::assertSame('lang="th"', $locale->htmlAttributes());
        self::assertSame('th', $locale->languageTag());
        self::assertSame('-๑๒๓', $locale->number(-123));
        self::assertSame('๑๒,๓๔๕,๖๗๘.๐๙', $locale->number(12345678.09));
        self::assertSame('๑,๒๓๔.๕๖%', $locale->percent(12.3456));
    }
}
