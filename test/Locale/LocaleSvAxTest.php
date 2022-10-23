<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSv;
use Fisharebest\Localization\Locale\LocaleSvAx;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryAx;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSvAx class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSvAxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSvAx();

        self::assertEquals(new LanguageSv(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryAx(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sv_AX', $locale->code());
        self::assertSame('swedish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sv-AX"', $locale->htmlAttributes());
        self::assertSame('sv-AX', $locale->languageTag());
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
