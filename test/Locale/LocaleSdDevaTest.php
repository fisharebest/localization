<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSd;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSdDeva class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSdDevaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSdDeva();

        self::assertEquals(new LanguageSd(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptDeva(), $locale->script());
        self::assertEquals(new TerritoryPk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sd_PK@devanagari', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('سنڌي', $locale->endonym());
        self::assertSame('lang="sd-Deva" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('sd-Deva', $locale->languageTag());
        self::assertSame('-१२३',  $locale->number(-123));
        self::assertSame('१२,३४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
