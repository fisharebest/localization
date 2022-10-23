<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageIs;
use Fisharebest\Localization\Locale\LocaleIs;
use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleIs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleIsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleIs();

        self::assertEquals(new LanguageIs(), $locale->language());
        self::assertEquals(new PluralRule15(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryIs(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('is_IS', $locale->code());
        self::assertSame('icelandic_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('íslenska', $locale->endonym());
        self::assertSame('lang="is"', $locale->htmlAttributes());
        self::assertSame('is', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
