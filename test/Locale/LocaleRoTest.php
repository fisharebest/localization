<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageRo;
use Fisharebest\Localization\Locale\LocaleRo;
use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryRo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleRo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleRo
 */
class LocaleRoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleRo();

        self::assertEquals(new LanguageRo(), $locale->language());
        self::assertEquals(new PluralRule5(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryRo(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ro_RO', $locale->code());
        self::assertSame('romanian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('română', $locale->endonym());
        self::assertSame('ROMANA', $locale->endonymSortable());
        self::assertSame('lang="ro"', $locale->htmlAttributes());
        self::assertSame('ro', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
