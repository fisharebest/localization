<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIt;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryVa;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleItVa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleItVaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleItVa();

        $this->assertEquals(new LanguageIt(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryVa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('it_VA', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('italiano', $locale->endonym());
        $this->assertSame('lang="it-VA"', $locale->htmlAttributes());
        $this->assertSame('it-VA', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
