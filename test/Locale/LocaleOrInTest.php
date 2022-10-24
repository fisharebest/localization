<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageOr;
use Fisharebest\Localization\Locale\LocaleOrIn;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptOrya;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleOrIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleOrIn
 */
class LocaleOrInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleOrIn();

        self::assertEquals(new LanguageOr(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptOrya(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('or_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('୦୧୨୩୪୫୬୭୮୯', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ଓଡ଼ିଆ', $locale->endonym());
        self::assertSame('ଓଡ଼ିଆ', $locale->endonymSortable());
        self::assertSame('lang="or"', $locale->htmlAttributes());
        self::assertSame('or', $locale->languageTag());
        self::assertSame('-୧୨୩', $locale->number(-123));
        self::assertSame('୧,୨୩,୪୫,୬୭୮.୦୯', $locale->number(12345678.09));
        self::assertSame('୧,୨୩୪.୫୬%', $locale->percent(12.3456));
    }
}
