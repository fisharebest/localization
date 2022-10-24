<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageId;
use Fisharebest\Localization\Locale\LocaleIdId;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleIdId class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleIdId
 */
class LocaleIdIdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleIdId();

        self::assertEquals(new LanguageId(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryId(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('id_ID', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Indonesia', $locale->endonym());
        self::assertSame('INDONESIA', $locale->endonymSortable());
        self::assertSame('lang="id"', $locale->htmlAttributes());
        self::assertSame('id', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
