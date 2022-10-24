<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageDv;
use Fisharebest\Localization\Locale\LocaleDv;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptThaa;
use Fisharebest\Localization\Territory\TerritoryMv;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDv class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleDv
 */
class LocaleDvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleDv();

        self::assertEquals(new LanguageDv(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptThaa(), $locale->script());
        self::assertEquals(new TerritoryMv(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('dv_MV', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('ތާނަ', $locale->endonym());
        self::assertSame('ތާނަ', $locale->endonymSortable());
        self::assertSame('lang="dv" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('dv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
