<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageDsb;
use Fisharebest\Localization\Locale\LocaleDsbDe;
use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDsbDe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleDsbDe
 */
class LocaleDsbDeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDsbDe();

        self::assertEquals(new LanguageDsb(), $locale->language());
        self::assertEquals(new PluralRule10(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryDe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('dsb_DE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('dolnoserbšćina', $locale->endonym());
        self::assertSame('DOLNOSERBSCINA', $locale->endonymSortable());
        self::assertSame('lang="dsb"', $locale->htmlAttributes());
        self::assertSame('dsb', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
