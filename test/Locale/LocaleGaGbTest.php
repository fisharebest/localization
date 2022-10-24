<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageGa;
use Fisharebest\Localization\Locale\LocaleGaGB;
use Fisharebest\Localization\PluralRule\PluralRule11;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGaGB class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleGaGB
 */
class LocaleGaGBTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleGaGB();

        self::assertEquals(new LanguageGa(), $locale->language());
        self::assertEquals(new PluralRule11(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryGb(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ga_GB', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Gaeilge', $locale->endonym());
        self::assertSame('GAEILGE', $locale->endonymSortable());
        self::assertSame('lang="ga-GB"', $locale->htmlAttributes());
        self::assertSame('ga-GB', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
