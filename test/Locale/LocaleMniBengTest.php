<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageMni;
use Fisharebest\Localization\Locale\LocaleMniBeng;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMniBeng class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleMniBeng
 */
class LocaleMniBengTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMniBeng();

        self::assertEquals(new LanguageMni(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptBeng(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mni_IN@bengali', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('মৈতৈলোন্', $locale->endonym());
        self::assertSame('মৈতৈলোন্', $locale->endonymSortable());
        self::assertSame('lang="mni-Beng"', $locale->htmlAttributes());
        self::assertSame('mni-Beng', $locale->languageTag());
        self::assertSame('-১২৩', $locale->number(-123));
        self::assertSame('১২,৩৪৫,৬৭৮.০৯', $locale->number(12345678.09));
        self::assertSame('১,২৩৪.৫৬%', $locale->percent(12.3456));
    }
}
