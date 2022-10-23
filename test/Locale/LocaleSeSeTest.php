<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSe;
use Fisharebest\Localization\Locale\LocaleSeSe;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSeSe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSeSeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSeSe();

        self::assertEquals(new LanguageSe(), $locale->language());
        self::assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('se_SE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="se-SE"', $locale->htmlAttributes());
        self::assertSame('se-SE', $locale->languageTag());
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
