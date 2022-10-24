<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageFr;
use Fisharebest\Localization\Locale\LocaleFrPf;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPf;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFrPf class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleFrPf
 */
class LocaleFrPfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleFrPf();

        self::assertEquals(new LanguageFr(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPf(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('fr_PF', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('français', $locale->endonym());
        self::assertSame('FRANCAIS', $locale->endonymSortable());
        self::assertSame('lang="fr-PF"', $locale->htmlAttributes());
        self::assertSame('fr-PF', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
