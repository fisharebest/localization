<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageVai;
use Fisharebest\Localization\Locale\LocaleVaiVaii;
use Fisharebest\Localization\Script\ScriptVaii;
use Fisharebest\Localization\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVaiVaii class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleVaiVaiiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleVaiVaii();

        self::assertEquals(new LanguageVai(), $locale->language());
        self::assertEquals(new ScriptVaii(), $locale->script());
        self::assertEquals(new TerritoryLr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('꘠꘡꘢꘣꘤꘥꘦꘧꘨꘩', $locale->digits('0123456789'));
        self::assertSame('lang="vai"', $locale->htmlAttributes());
        self::assertSame('-꘡꘢꘣', $locale->number(-123));
        self::assertSame('꘡꘢,꘣꘤꘥,꘦꘧꘨.꘠꘩', $locale->number(12345678.09));
        self::assertSame('꘡,꘢꘣꘤.꘥꘦%', $locale->percent(12.3456));
    }
}
