<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLt;
use Fisharebest\Localization\PluralRule\PluralRule6;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleLtLt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLtLtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleLtLt();

        self::assertEquals(new LanguageLt(), $locale->language());
        self::assertEquals(new PluralRule6(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryLt(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('lt_LT', $locale->code());
        self::assertSame('lithuanian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="lt"', $locale->htmlAttributes());
        self::assertSame('lt', $locale->languageTag());
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
