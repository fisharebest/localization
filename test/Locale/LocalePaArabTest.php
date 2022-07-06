<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePa;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePaArab class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePaArabTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocalePaArab();

        $this->assertEquals(new LanguagePa(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('pa_IN@arabic', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('lang="pa-Arab" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('pa-Arab', $locale->languageTag());
        $this->assertSame('١,٢٣,٤٥,٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('-١٢٣', $locale->number(-123));
        $this->assertSame('١,٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
