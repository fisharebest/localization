<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePa;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGuru;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocalePa();

        self::assertEquals(new LanguagePa(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptGuru(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pa_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('੦੧੨੩੪੫੬੭੮੯', $locale->digits('0123456789'));
        self::assertSame('ਪੰਜਾਬੀ', $locale->endonym());
        self::assertSame('lang="pa"', $locale->htmlAttributes());
        self::assertSame('pa', $locale->languageTag());
        self::assertSame('-੧੨੩', $locale->number(-123));
        self::assertSame('੧,੨੩,੪੫,੬੭੮.੦੯', $locale->number(12345678.09));
        self::assertSame('੧,੨੩੪.੫੬%', $locale->percent(12.3456));
    }
}
