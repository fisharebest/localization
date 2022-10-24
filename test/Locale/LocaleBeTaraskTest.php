<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageBe;
use Fisharebest\Localization\Locale\LocaleBeTarask;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBy;
use Fisharebest\Localization\Variant\VariantTarask;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBeTarask class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleBeTarask
 */
class LocaleBeTaraskTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBeTarask();

        self::assertEquals(new LanguageBe(), $locale->language());
        self::assertEquals(new PluralRule7(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryBy(), $locale->territory());
        self::assertEquals(new VariantTarask(), $locale->variant());
        self::assertSame('be_BY@tarask', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('беларуская', $locale->endonym());
        self::assertSame('БЕЛАРУСКАЯ', $locale->endonymSortable());
        self::assertSame('lang="be-tarask"', $locale->htmlAttributes());
        self::assertSame('be-tarask', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
