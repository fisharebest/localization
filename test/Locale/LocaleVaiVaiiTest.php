<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVai;
use Fisharebest\Localization\Script\ScriptVaii;
use Fisharebest\Localization\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVaiVaii class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleVaiVaiiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleVaiVaii();

        $this->assertEquals(new LanguageVai(), $locale->language());
        $this->assertEquals(new ScriptVaii(), $locale->script());
        $this->assertEquals(new TerritoryLr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('꘠꘡꘢꘣꘤꘥꘦꘧꘨꘩', $locale->digits('0123456789'));
        $this->assertSame('lang="vai"', $locale->htmlAttributes());
        $this->assertSame('-꘡꘢꘣', $locale->number(-123));
        $this->assertSame('꘡꘢,꘣꘤꘥,꘦꘧꘨.꘠꘩', $locale->number(12345678.09));
        $this->assertSame('꘡,꘢꘣꘤.꘥꘦%', $locale->percent(12.3456));
    }
}
