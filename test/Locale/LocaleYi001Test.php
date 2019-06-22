<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageYi;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleYi001 class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleYi001Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleYi001();

        $this->assertEquals(new LanguageYi(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptHebr(), $locale->script());
        $this->assertEquals(new Territory001(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="yi" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
