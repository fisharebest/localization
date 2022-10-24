<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageEl;
use Fisharebest\Localization\Locale\LocaleEl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGrek;
use Fisharebest\Localization\Territory\TerritoryGr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleEl
 */
class LocaleElTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEl();

        self::assertEquals(new LanguageEl(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptGrek(), $locale->script());
        self::assertEquals(new TerritoryGr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('el_GR', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Ελληνικά', $locale->endonym());
        self::assertSame('ΕΛΛΗΝΙΚΆ', $locale->endonymSortable());
        self::assertSame('lang="el"', $locale->htmlAttributes());
        self::assertSame('el', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
