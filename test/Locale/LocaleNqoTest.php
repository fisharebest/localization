<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNqo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptNkoo;
use Fisharebest\Localization\Territory\TerritoryGn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleNqo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleNqoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNqo();

        $this->assertEquals(new LanguageNqo(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptNkoo(), $locale->script());
        $this->assertEquals(new TerritoryGn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('nqo_GN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('߀߁߂߃߄߅߆߇߈߉', $locale->digits('0123456789'));
        $this->assertSame('ߒߞߏ', $locale->endonym());
        $this->assertSame('lang="nqo" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('nqo', $locale->languageTag());
        $this->assertSame('-߁߂߃', $locale->number(-123));
        $this->assertSame('߁߂,߃߄߅,߆߇߈.߀߉', $locale->number(12345678.09));
        $this->assertSame('߁,߂߃߄.߅߆%', $locale->percent(12.3456));
    }
}
