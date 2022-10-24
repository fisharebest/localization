<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageLo;
use Fisharebest\Localization\Locale\LocaleLo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLaoo;
use Fisharebest\Localization\Territory\TerritoryLa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleLo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleLo
 */
class LocaleLoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleLo();

        self::assertEquals(new LanguageLo(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptLaoo(), $locale->script());
        self::assertEquals(new TerritoryLa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('lo_LA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('໐໑໒໓໔໕໖໗໘໙', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ລາວ', $locale->endonym());
        self::assertSame('ລາວ', $locale->endonymSortable());
        self::assertSame('lang="lo"', $locale->htmlAttributes());
        self::assertSame('lo', $locale->languageTag());
        self::assertSame('-໑໒໓', $locale->number(-123));
        self::assertSame('໑໒.໓໔໕.໖໗໘,໐໙', $locale->number(12345678.09));
        self::assertSame('໑.໒໓໔,໕໖%', $locale->percent(12.3456));
    }
}
