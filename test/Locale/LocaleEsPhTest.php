<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageEs;
use Fisharebest\Localization\Locale\LocaleEsPh;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEsPh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleEsPh
 */
class LocaleEsPhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEsPh();

        self::assertEquals(new LanguageEs(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('es_PH', $locale->code());
        self::assertSame('spanish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('español', $locale->endonym());
        self::assertSame('ESPANOL', $locale->endonymSortable());
        self::assertSame('lang="es-PH"', $locale->htmlAttributes());
        self::assertSame('es-PH', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
