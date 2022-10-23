<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageYrl;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryVe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleYrlVe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleYrlVeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleYrlVe();

        self::assertEquals(new LanguageYrl(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryVe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('yrl_VE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('nheẽgatu', $locale->endonym());
        self::assertSame('lang="yrl-VE"', $locale->htmlAttributes());
        self::assertSame('yrl-VE', $locale->languageTag());
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
