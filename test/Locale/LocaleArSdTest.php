<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritorySd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleArSd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleArSdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleArSd();

        $this->assertEquals(new LanguageAr(), $locale->language());
        $this->assertEquals(new PluralRule12(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritorySd(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ar_SD', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('lang="ar-SD" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('ar-SD', $locale->languageTag());
        $this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('؜-١٢٣', $locale->number(-123));
        $this->assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
