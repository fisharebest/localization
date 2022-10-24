<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageGv;
use Fisharebest\Localization\Locale\LocaleGv;
use Fisharebest\Localization\PluralRule\PluralRuleManx;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGv class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleGv
 */
class LocaleGvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleGv();

        self::assertEquals(new LanguageGv(), $locale->language());
        self::assertEquals(new PluralRuleManx(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryIm(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('gv_IM', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Gaelg', $locale->endonym());
        self::assertSame('GAELG', $locale->endonymSortable());
        self::assertSame('lang="gv"', $locale->htmlAttributes());
        self::assertSame('gv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
