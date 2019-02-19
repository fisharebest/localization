<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHsb;
use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDe;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleHsbDe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleHsbDeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleHsbDe();

        $this->assertEquals(new LanguageHsb(), $locale->language());
        $this->assertEquals(new PluralRule10(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryDe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('hsb_DE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="hsb"', $locale->htmlAttributes());
        $this->assertSame('hsb', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
