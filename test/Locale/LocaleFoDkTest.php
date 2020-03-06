<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFoDk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFoDkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFoDk();

        $this->assertEquals(new LanguageFo(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryDk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('fo_DK', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="fo-DK"', $locale->htmlAttributes());
        $this->assertSame('fo-DK', $locale->languageTag());
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
