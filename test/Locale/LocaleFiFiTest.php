<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageFi;
use Fisharebest\Localization\Locale\LocaleFiFi;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFiFi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFiFiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFiFi();

        self::assertEquals(new LanguageFi(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryFi(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('fi_FI', $locale->code());
        self::assertSame('swedish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="fi"', $locale->htmlAttributes());
        self::assertSame('fi', $locale->languageTag());
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
