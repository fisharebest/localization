<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSi;
use Fisharebest\Localization\Locale\LocaleSiLk;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptSinh;
use Fisharebest\Localization\Territory\TerritoryLk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSiLk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSiLkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSiLk();

        self::assertEquals(new LanguageSi(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptSinh(), $locale->script());
        self::assertEquals(new TerritoryLk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('si_LK', $locale->code());
        self::assertSame('sinhala_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="si"', $locale->htmlAttributes());
        self::assertSame('si', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
