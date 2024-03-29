<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageVun;
use Fisharebest\Localization\Locale\LocaleVun;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVun class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleVun
 */
class LocaleVunTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleVun();

        self::assertEquals(new LanguageVun(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryTz(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('vun_TZ', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Kyivunjo', $locale->endonym());
        self::assertSame('KYIVUNJO', $locale->endonymSortable());
        self::assertSame('lang="vun"', $locale->htmlAttributes());
        self::assertSame('vun', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
