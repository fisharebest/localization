<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOsa;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryUS;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleOsa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleOsaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleOsa();

        self::assertEquals(new LanguageOsa(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryUs(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('osa_US', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('Osage', $locale->endonym());
        self::assertSame('lang="osa"', $locale->htmlAttributes());
        self::assertSame('osa', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}