<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTzm;
use Fisharebest\Localization\Locale\LocaleTzmMa;
use Fisharebest\Localization\PluralRule\PluralRuleCentralAtlasTamazight;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTzmMa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleTzmMa
 */
class LocaleTzmMaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTzmMa();

        self::assertEquals(new LanguageTzm(), $locale->language());
        self::assertEquals(new PluralRuleCentralAtlasTamazight(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMa(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('tzm_MA', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Tamaziɣt n laṭlaṣ', $locale->endonym());
        self::assertSame('TAMAZIGHT N LATLAS', $locale->endonymSortable());
        self::assertSame('lang="tzm"', $locale->htmlAttributes());
        self::assertSame('tzm', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
