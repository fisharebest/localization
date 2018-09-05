<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIu;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptCans;
use Fisharebest\Localization\Territory\TerritoryCa;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleIu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleIuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleIu();

        $this->assertEquals(new LanguageIu(), $locale->language());
        $this->assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        $this->assertEquals(new ScriptCans(), $locale->script());
        $this->assertEquals(new TerritoryCa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('iu_CA', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('ᐃᓄᒃᑎᑐᑦ', $locale->endonym());
        $this->assertSame('lang="iu"', $locale->htmlAttributes());
        $this->assertSame('iu', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
