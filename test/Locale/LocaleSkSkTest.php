<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSk;
use Fisharebest\Localization\Locale\LocaleSkSk;
use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSkSk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleSkSk
 */
class LocaleSkSkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSkSk();

        self::assertEquals(new LanguageSk(), $locale->language());
        self::assertEquals(new PluralRule8(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sk_SK', $locale->code());
        self::assertSame('slovak_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('slovenčina', $locale->endonym());
        self::assertSame('SLOVENCINA', $locale->endonymSortable());
        self::assertSame('lang="sk"', $locale->htmlAttributes());
        self::assertSame('sk', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
