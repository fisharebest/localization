<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageZu;
use Fisharebest\Localization\Locale\LocaleZu;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryZa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleZu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleZu
 */
class LocaleZuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleZu();

        self::assertEquals(new LanguageZu(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryZa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('zu_ZA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('isiZulu', $locale->endonym());
        self::assertSame('ISIZULU', $locale->endonymSortable());
        self::assertSame('lang="zu"', $locale->htmlAttributes());
        self::assertSame('zu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
