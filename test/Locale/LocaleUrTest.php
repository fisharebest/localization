<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageUr;
use Fisharebest\Localization\Locale\LocaleUr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleUr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleUr
 */
class LocaleUrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleUr();

        self::assertEquals(new LanguageUr(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryPk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ur_PK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('اردو', $locale->endonym());
        self::assertSame('اردو', $locale->endonymSortable());
        self::assertSame('lang="ur" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ur', $locale->languageTag());
        self::assertSame('‎-١٢٣', $locale->number(-123));
        self::assertSame('١,٢٣,٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame('١,٢٣٤.٥٦%', $locale->percent(12.3456));
    }
}
