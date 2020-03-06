<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePa;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptGuru;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePaGuru class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePaGuruTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocalePaGuru();

        $this->assertEquals(new LanguagePa(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptGuru(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('pa_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('੦੧੨੩੪੫੬੭੮੯', $locale->digits('0123456789'));
        $this->assertSame('lang="pa"', $locale->htmlAttributes());
        $this->assertSame('pa', $locale->languageTag());
        $this->assertSame('-੧੨੩', $locale->number(-123));
        $this->assertSame('੧,੨੩,੪੫,੬੭੮.੦੯', $locale->number(12345678.09));
        $this->assertSame('੧,੨੩੪.੫੬%', $locale->percent(12.3456));
    }
}
