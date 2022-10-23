<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageShi;
use Fisharebest\Localization\Locale\LocaleShiLatn;
use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleShiLatn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleShiLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleShiLatn();

        self::assertEquals(new LanguageShi(), $locale->language());
        self::assertEquals(new PluralRuleTachelhit(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('shi_MA@latin', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('tamazight', $locale->endonym());
        self::assertSame('lang="shi-Latn"', $locale->htmlAttributes());
        self::assertSame('shi-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
