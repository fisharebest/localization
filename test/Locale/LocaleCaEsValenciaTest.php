<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCa;
use Fisharebest\Localization\Locale\LocaleCaEsValencia;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Variant\VariantValencia;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCaEsValencia class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCaEsValencia
 */
class LocaleCaEsValenciaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCaEsValencia();

        self::assertEquals(new LanguageCa(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryEs(), $locale->territory());
        self::assertEquals(new VariantValencia(), $locale->variant());
        self::assertSame('ca_ES@valencia', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('català', $locale->endonym());
        self::assertSame('CATALA', $locale->endonymSortable());
        self::assertSame('lang="ca-valencia"', $locale->htmlAttributes());
        self::assertSame('ca-valencia', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
