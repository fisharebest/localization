<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSr;
use Fisharebest\Localization\Locale\LocaleSrCyrlBa;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSrCyrlBa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleSrCyrlBa
 */
class LocaleSrCyrlBaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSrCyrlBa();

        self::assertEquals(new LanguageSr(), $locale->language());
        self::assertEquals(new PluralRule7(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryBa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sr_BA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('српски', $locale->endonym());
        self::assertSame('СРПСКИ', $locale->endonymSortable());
        self::assertSame('lang="sr-BA"', $locale->htmlAttributes());
        self::assertSame('sr-BA', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
