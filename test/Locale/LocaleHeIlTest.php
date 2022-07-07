<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;
use Fisharebest\Localization\Territory\TerritoryIl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHeIl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHeIlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleHeIl();

        self::assertEquals(new LanguageHe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptHebr(), $locale->script());
        self::assertEquals(new TerritoryIl(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('he_IL', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="he" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('he', $locale->languageTag());
        self::assertSame('‎-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
