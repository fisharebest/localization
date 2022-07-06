<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRn;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryBi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleRnBi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRnBiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleRnBi();

        $this->assertEquals(new LanguageRn(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryBi(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('rn_BI', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="rn"', $locale->htmlAttributes());
        $this->assertSame('rn', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
