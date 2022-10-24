<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageMl;
use Fisharebest\Localization\Locale\LocaleMl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptMlym;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleMl
 */
class LocaleMlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMl();

        self::assertEquals(new LanguageMl(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptMlym(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ml_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('൦൧൨൩൪൫൬൭൮൯', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('മലയാളം', $locale->endonym());
        self::assertSame('മലയാളം', $locale->endonymSortable());
        self::assertSame('lang="ml"', $locale->htmlAttributes());
        self::assertSame('ml', $locale->languageTag());
        self::assertSame('-൧൨൩', $locale->number(-123));
        self::assertSame('൧,൨൩,൪൫,൬൭൮.൦൯', $locale->number(12345678.09));
        self::assertSame('൧,൨൩൪.൫൬%', $locale->percent(12.3456));
    }
}
