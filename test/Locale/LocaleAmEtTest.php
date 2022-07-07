<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAm;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleAmEt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAmEtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleAmEt();

        self::assertEquals(new LanguageAm(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptEthi(), $locale->script());
        self::assertEquals(new TerritoryEt(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('am_ET', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="am"', $locale->htmlAttributes());
        self::assertSame('am', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
