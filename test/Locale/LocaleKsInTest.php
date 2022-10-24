<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageKs;
use Fisharebest\Localization\Locale\LocaleKsIn;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKsIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleKsIn
 */
class LocaleKsInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleKsIn();

        self::assertEquals(new LanguageKs(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ks_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('کٲشُر', $locale->endonym());
        self::assertSame('کٲشُر', $locale->endonymSortable());
        self::assertSame('lang="ks" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ks', $locale->languageTag());
        self::assertSame('‎-‎١٢٣', $locale->number(-123));
        self::assertSame('١٬٢٣٬٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        self::assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
