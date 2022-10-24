<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTig;
use Fisharebest\Localization\Locale\LocaleTig;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTig class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleTig
 */
class LocaleTigTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTig();

        self::assertEquals(new LanguageTig(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptEthi(), $locale->script());
        self::assertEquals(new TerritoryEr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('tig_ER', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ትግራይት', $locale->endonym());
        self::assertSame('ትግራይት', $locale->endonymSortable());
        self::assertSame('lang="tig"', $locale->htmlAttributes());
        self::assertSame('tig', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
