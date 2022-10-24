<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageHaw;
use Fisharebest\Localization\Locale\LocaleHawUs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryUs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHawUs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleHawUs
 */
class LocaleHawUsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleHawUs();

        self::assertEquals(new LanguageHaw(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryUs(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('haw_US', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ʻŌlelo Hawaiʻi', $locale->endonym());
        self::assertSame('OLELO HAWAII', $locale->endonymSortable());
        self::assertSame('lang="haw"', $locale->htmlAttributes());
        self::assertSame('haw', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
