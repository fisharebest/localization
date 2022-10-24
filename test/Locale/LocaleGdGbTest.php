<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageGd;
use Fisharebest\Localization\Locale\LocaleGdGb;
use Fisharebest\Localization\PluralRule\PluralRule4;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGdGb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleGdGb
 */
class LocaleGdGbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleGdGb();

        self::assertEquals(new LanguageGd(), $locale->language());
        self::assertEquals(new PluralRule4(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryGb(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('gd_GB', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Gàidhlig', $locale->endonym());
        self::assertSame('GAIDHLIG', $locale->endonymSortable());
        self::assertSame('lang="gd"', $locale->htmlAttributes());
        self::assertSame('gd', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
