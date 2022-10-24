<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageHu;
use Fisharebest\Localization\Locale\LocaleHu;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryHu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleHu
 */
class LocaleHuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleHu();

        self::assertEquals(new LanguageHu(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryHu(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('hu_HU', $locale->code());
        self::assertSame('hungarian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('magyar', $locale->endonym());
        self::assertSame('MAGYAR', $locale->endonymSortable());
        self::assertSame('lang="hu"', $locale->htmlAttributes());
        self::assertSame('hu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
