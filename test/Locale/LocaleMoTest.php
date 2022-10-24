<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageMo;
use Fisharebest\Localization\Locale\LocaleMo;
use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleMo
 */
class LocaleMoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMo();

        self::assertEquals(new LanguageMo(), $locale->language());
        self::assertEquals(new PluralRule5(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMd(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mo_MD', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('limba moldovenească', $locale->endonym());
        self::assertSame('LIMBA MOLDOVENEASCĂ', $locale->endonymSortable());
        self::assertSame('lang="mo"', $locale->htmlAttributes());
        self::assertSame('mo', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
