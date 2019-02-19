<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageArs;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritorySa;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleArs class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleArsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleArs();

        $this->assertEquals(new LanguageArs(), $locale->language());
        $this->assertEquals(new PluralRule12(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritorySa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ars_SA', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('اللهجة النجدية‎', $locale->endonym());
        $this->assertSame('lang="ars" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('ars', $locale->languageTag());
        $this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('؜-١٢٣', $locale->number(-123));
        $this->assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
