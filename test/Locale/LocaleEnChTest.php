<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageEn;
use Fisharebest\Localization\Locale\LocaleEnCh;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEnCh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleEnCh
 */
class LocaleEnChTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEnCh();

        self::assertEquals(new LanguageEn(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryCh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('en_CH', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('English', $locale->endonym());
        self::assertSame('ENGLISH', $locale->endonymSortable());
        self::assertSame('lang="en-CH"', $locale->htmlAttributes());
        self::assertSame('en-CH', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12’345’678.09', $locale->number(12345678.09));
        self::assertSame('1’234.56%', $locale->percent(12.3456));
    }
}
