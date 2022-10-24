<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageEn;
use Fisharebest\Localization\Locale\LocaleEnUsPosix;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryUs;
use Fisharebest\Localization\Variant\VariantPosix;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEnUsPosix class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleEnUsPosix
 */
class LocaleEnUsPosixTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEnUsPosix();

        self::assertEquals(new LanguageEn(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryUs(), $locale->territory());
        self::assertEquals(new VariantPosix(), $locale->variant());
        self::assertSame('POSIX', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('American English', $locale->endonym());
        self::assertSame('ENGLISH, AMERICAN', $locale->endonymSortable());
        self::assertSame('lang="en-US-posix"', $locale->htmlAttributes());
        self::assertSame('en-US-posix', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12345678.09', $locale->number(12345678.09));
        self::assertSame('1234.56%', $locale->percent(12.3456));
    }
}
