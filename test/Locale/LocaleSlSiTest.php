<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSl;
use Fisharebest\Localization\Locale\LocaleSlSi;
use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSlSi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleSlSi
 */
class LocaleSlSiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSlSi();

        self::assertEquals(new LanguageSl(), $locale->language());
        self::assertEquals(new PluralRule10(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySi(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sl_SI', $locale->code());
        self::assertSame('slovenian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('slovenščina', $locale->endonym());
        self::assertSame('SLOVENSCINA', $locale->endonymSortable());
        self::assertSame('lang="sl"', $locale->htmlAttributes());
        self::assertSame('sl', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
