<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIt;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryVa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleItVa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
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
