<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageEt;
use Fisharebest\Localization\Locale\LocaleEt;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleEt
 */
class LocaleEtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEt();

        self::assertEquals(new LanguageEt(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryEe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('et_EE', $locale->code());
        self::assertSame('estonian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('eesti', $locale->endonym());
        self::assertSame('EESTI', $locale->endonymSortable());
        self::assertSame('lang="et"', $locale->htmlAttributes());
        self::assertSame('et', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('12345 678,09', $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
