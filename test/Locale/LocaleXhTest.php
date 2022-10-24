<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageXh;
use Fisharebest\Localization\Locale\LocaleXh;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryZa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleXh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleXh
 */
class LocaleXhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleXh();

        self::assertEquals(new LanguageXh(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryZa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('xh_ZA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('IsiXhosa', $locale->endonym());
        self::assertSame('XHOSA', $locale->endonymSortable());
        self::assertSame('lang="xh"', $locale->htmlAttributes());
        self::assertSame('xh', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678.09', $locale->number(12345678.09));
        self::assertSame('1 234.56%', $locale->percent(12.3456));
    }
}
