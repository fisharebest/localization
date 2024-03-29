<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageUg;
use Fisharebest\Localization\Locale\LocaleUg;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryCn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleUg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleUg
 */
class LocaleUgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleUg();

        self::assertEquals(new LanguageUg(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptArab(), $locale->script());
        self::assertEquals(new TerritoryCn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ug_CN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('ئۇيغۇرچە', $locale->endonym());
        self::assertSame('ئۇيغۇرچە', $locale->endonymSortable());
        self::assertSame('lang="ug" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('ug', $locale->languageTag());
        self::assertSame('-١٢٣', $locale->number(-123));
        self::assertSame('١٢,٣٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        self::assertSame('١,٢٣٤.٥٦%', $locale->percent(12.3456));
    }
}
