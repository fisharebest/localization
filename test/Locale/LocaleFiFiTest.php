<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFi;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFi;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleFiFi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleFiFiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFiFi();

        $this->assertEquals(new LanguageFi(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryFi(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('fi_FI', $locale->code());
        $this->assertSame('swedish_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="fi"', $locale->htmlAttributes());
        $this->assertSame('fi', $locale->languageTag());
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
