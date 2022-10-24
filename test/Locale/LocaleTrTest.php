<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTr;
use Fisharebest\Localization\Locale\LocaleTr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleTr
 */
class LocaleTrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTr();

        self::assertEquals(new LanguageTr(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryTr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('tr_TR', $locale->code());
        self::assertSame('turkish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Türkçe', $locale->endonym());
        self::assertSame('TURKCE', $locale->endonymSortable());
        self::assertSame('lang="tr"', $locale->htmlAttributes());
        self::assertSame('tr', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('%1.234,56', $locale->percent(12.3456));
    }
}
