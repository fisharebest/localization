<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGsw;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLi;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleGswLi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleGswLiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleGswLi();

        $this->assertEquals(new LanguageGsw(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryLi(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('gsw_LI', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="gsw-LI"', $locale->htmlAttributes());
        $this->assertSame('gsw-LI', $locale->languageTag());
        $this->assertSame('12’345’678.09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1’234.56 %', $locale->percent(12.3456));
    }
}
