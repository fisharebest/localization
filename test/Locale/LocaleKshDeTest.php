<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKsh;
use Fisharebest\Localization\PluralRule\PluralRuleZeroOneOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKshDe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleKshDeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKshDe();

        $this->assertEquals(new LanguageKsh(), $locale->language());
        $this->assertEquals(new PluralRuleZeroOneOther(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryDe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ksh_DE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ksh"', $locale->htmlAttributes());
        $this->assertSame('ksh', $locale->languageTag());
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
