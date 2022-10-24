<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageNo;
use Fisharebest\Localization\Locale\LocaleNo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleNo
 */
class LocaleNoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNo();

        self::assertEquals(new LanguageNo(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryNo(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('no_NO', $locale->code());
        self::assertSame('danish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('norsk', $locale->endonym());
        self::assertSame('NORSK', $locale->endonymSortable());
        self::assertSame('lang="no"', $locale->htmlAttributes());
        self::assertSame('no', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
