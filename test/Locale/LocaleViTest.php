<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageVi;
use Fisharebest\Localization\Locale\LocaleVi;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryVn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleVi
 */
class LocaleViTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleVi();

        self::assertEquals(new LanguageVi(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryVn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('vi_VN', $locale->code());
        self::assertSame('vietnamese_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Tiếng Việt', $locale->endonym());
        self::assertSame('TIENG VIET', $locale->endonymSortable());
        self::assertSame('lang="vi"', $locale->htmlAttributes());
        self::assertSame('vi', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
