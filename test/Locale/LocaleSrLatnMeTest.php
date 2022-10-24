<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSr;
use Fisharebest\Localization\Locale\LocaleSrLatnMe;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSrLatnMe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleSrLatnMe
 */
class LocaleSrLatnMeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSrLatnMe();

        self::assertEquals(new LanguageSr(), $locale->language());
        self::assertEquals(new PluralRule7(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sr_ME@latin', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('srpski', $locale->endonym());
        self::assertSame('SRPSKI', $locale->endonymSortable());
        self::assertSame('lang="sr-Latn-ME"', $locale->htmlAttributes());
        self::assertSame('sr-Latn-ME', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
