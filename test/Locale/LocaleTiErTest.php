<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTi;
use Fisharebest\Localization\Locale\LocaleTiEr;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTiEr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleTiEr
 */
class LocaleTiErTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTiEr();

        self::assertEquals(new LanguageTi(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptEthi(), $locale->script());
        self::assertEquals(new TerritoryEr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ti_ER', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ትግርኛ', $locale->endonym());
        self::assertSame('ትግርኛ', $locale->endonymSortable());
        self::assertSame('lang="ti-ER"', $locale->htmlAttributes());
        self::assertSame('ti-ER', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
