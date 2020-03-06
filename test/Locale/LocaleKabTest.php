<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKab;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKab class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKabTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKab();

        $this->assertEquals(new LanguageKab(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryDz(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('kab_DZ', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Taqbaylit', $locale->endonym());
        $this->assertSame('lang="kab"', $locale->htmlAttributes());
        $this->assertSame('kab', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
