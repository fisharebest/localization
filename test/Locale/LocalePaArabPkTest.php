<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePa;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePaArabPk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePaArabPkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocalePaArabPk();

        $this->assertEquals(new LanguagePa(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryPk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('pa_PK@arabic', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('lang="pa-Arab-PK" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('pa-Arab-PK', $locale->languageTag());
        $this->assertSame('١,٢٣,٤٥,٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('-١٢٣', $locale->number(-123));
        $this->assertSame('١,٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
