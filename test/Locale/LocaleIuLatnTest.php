<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIu;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCa;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleIuLatn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleIuLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleIuLatn();

        $this->assertEquals(new LanguageIu(), $locale->language());
        $this->assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryCa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('iu_CA@latin', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Inuktitut', $locale->endonym());
        $this->assertSame('lang="iu-Latn"', $locale->htmlAttributes());
        $this->assertSame('iu-Latn', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
