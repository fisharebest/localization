<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageMni;
use Fisharebest\Localization\Locale\LocaleMni;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptMtei;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMni class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleMni
 */
class LocaleMniTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMni();

        self::assertEquals(new LanguageMni(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptMtei(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mni_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('꯰꯱꯲꯳꯴꯵꯶꯷꯸꯹', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('মৈতৈলোন্', $locale->endonym());
        self::assertSame('মৈতৈলোন্', $locale->endonymSortable());
        self::assertSame('lang="mni"', $locale->htmlAttributes());
        self::assertSame('mni', $locale->languageTag());
        self::assertSame('-꯱꯲꯳', $locale->number(-123));
        self::assertSame('꯱꯲,꯳꯴꯵,꯶꯷꯸.꯰꯹', $locale->number(12345678.09));
        self::assertSame('꯱,꯲꯳꯴.꯵꯶%', $locale->percent(12.3456));
    }
}
