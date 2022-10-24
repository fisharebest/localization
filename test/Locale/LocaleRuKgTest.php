<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageRu;
use Fisharebest\Localization\Locale\LocaleRuKg;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryKg;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleRuKg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleRuKg
 */
class LocaleRuKgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleRuKg();

        self::assertEquals(new LanguageRu(), $locale->language());
        self::assertEquals(new PluralRule7(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryKg(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ru_KG', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('русский', $locale->endonym());
        self::assertSame('РУССКИЙ', $locale->endonymSortable());
        self::assertSame('lang="ru-KG"', $locale->htmlAttributes());
        self::assertSame('ru-KG', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
