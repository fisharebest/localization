<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageDz;
use Fisharebest\Localization\Locale\LocaleDz;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptTibt;
use Fisharebest\Localization\Territory\TerritoryBt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDz class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleDz
 */
class LocaleDzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDz();

        self::assertEquals(new LanguageDz(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptTibt(), $locale->script());
        self::assertEquals(new TerritoryBt(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('dz_BT', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('༠༡༢༣༤༥༦༧༨༩', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('རྫོང་ཁ', $locale->endonym());
        self::assertSame('རྫོང་ཁ', $locale->endonymSortable());
        self::assertSame('lang="dz"', $locale->htmlAttributes());
        self::assertSame('dz', $locale->languageTag());
        self::assertSame('-༡༢༣', $locale->number(-123));
        self::assertSame('༡,༢༣,༤༥,༦༧༨.༠༩', $locale->number(12345678.09));
        self::assertSame('༡,༢༣༤.༥༦ %', $locale->percent(12.3456));
    }
}
