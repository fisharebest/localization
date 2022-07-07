<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBn;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Territory\TerritoryBd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleBnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBn();

        self::assertEquals(new LanguageBn(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptBeng(), $locale->script());
        self::assertEquals(new TerritoryBd(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('bn_BD', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
        self::assertSame('বাংলা', $locale->endonym());
        self::assertSame('lang="bn"', $locale->htmlAttributes());
        self::assertSame('bn', $locale->languageTag());
        self::assertSame('-১২৩', $locale->number(-123));
        self::assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
        self::assertSame('১,২৩৪.৫৬%', $locale->percent(12.3456));
    }
}
