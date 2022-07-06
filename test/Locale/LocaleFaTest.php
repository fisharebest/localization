<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFa;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFa();

        $this->assertEquals(new LanguageFa(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryIr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('fa_IR', $locale->code());
        $this->assertSame('persian_ci', $locale->collation());
        $this->assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        $this->assertSame('فارسی', $locale->endonym());
        $this->assertSame('lang="fa" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('fa', $locale->languageTag());
        $this->assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        $this->assertSame('‎−۱۲۳', $locale->number(-123));
        $this->assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
