<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguagePs;
use Fisharebest\Localization\Locale\LocalePsAf;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryAf;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePsAf class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocalePsAf
 */
class LocalePsAfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePsAf();

        self::assertEquals(new LanguagePs(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryAf(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ps_AF', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('پښتو', $locale->endonym());
        self::assertSame('پښتو', $locale->endonymSortable());
        self::assertSame('lang="ps-AF" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ps-AF', $locale->languageTag());
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
