<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCe;
use Fisharebest\Localization\Locale\LocaleCeRu;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCeRu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCeRu
 */
class LocaleCeRuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleCeRu();

        self::assertEquals(new LanguageCe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryRu(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ce_RU', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('нохчийн', $locale->endonym());
        self::assertSame('НОХЧИЙН', $locale->endonymSortable());
        self::assertSame('lang="ce"', $locale->htmlAttributes());
        self::assertSame('ce', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56 %', $locale->percent(12.3456));
    }
}
