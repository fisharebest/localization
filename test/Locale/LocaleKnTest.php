<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageKn;
use Fisharebest\Localization\Locale\LocaleKn;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptKnda;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleKnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKn();

        self::assertEquals(new LanguageKn(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptKnda(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('kn_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('೦೧೨೩೪೫೬೭೮೯', $locale->digits('0123456789'));
        self::assertSame('ಕನ್ನಡ', $locale->endonym());
        self::assertSame('lang="kn"', $locale->htmlAttributes());
        self::assertSame('kn', $locale->languageTag());
        self::assertSame('-೧೨೩', $locale->number(-123));
        self::assertSame('೧೨,೩೪೫,೬೭೮.೦೯', $locale->number(12345678.09));
        self::assertSame('೧,೨೩೪.೫೬%', $locale->percent(12.3456));
    }
}
