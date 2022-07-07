<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHr;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryHr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleHr();

        self::assertEquals(new LanguageHr(), $locale->language());
        self::assertEquals(new PluralRule7(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryHr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('hr_HR', $locale->code());
        self::assertSame('croatian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('hrvatski', $locale->endonym());
        self::assertSame('lang="hr"', $locale->htmlAttributes());
        self::assertSame('hr', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
