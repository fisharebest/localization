<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTelu;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTeIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTeInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTeIn();

        self::assertEquals(new LanguageTe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptTelu(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('te_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('౦౧౨౩౪౫౬౭౮౯', $locale->digits('0123456789'));
        self::assertSame('lang="te"', $locale->htmlAttributes());
        self::assertSame('te', $locale->languageTag());
        self::assertSame('-౧౨౩', $locale->number(-123));
        self::assertSame('౧,౨౩,౪౫,౬౭౮.౦౯', $locale->number(12345678.09));
        self::assertSame('౧,౨౩౪.౫౬%', $locale->percent(12.3456));
    }
}
