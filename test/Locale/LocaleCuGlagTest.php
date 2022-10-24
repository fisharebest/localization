<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCu;
use Fisharebest\Localization\Locale\LocaleCuGlag;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGlag;
use Fisharebest\Localization\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCuGlag class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCuGlag
 */
class LocaleCuGlagTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCuGlag();

        self::assertEquals(new LanguageCu(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptGlag(), $locale->script());
        self::assertEquals(new TerritoryRu(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('cu_RU@glagolitic', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ', $locale->endonym());
        self::assertSame('ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ', $locale->endonymSortable());
        self::assertSame('lang="cu-Glag"', $locale->htmlAttributes());
        self::assertSame('cu-Glag', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
