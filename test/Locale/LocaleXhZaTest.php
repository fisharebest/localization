<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageXh;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryZa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleXhZa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleXhZaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleXhZa();

        $this->assertEquals(new LanguageXh(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryZa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('xh_ZA', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="xh"', $locale->htmlAttributes());
        $this->assertSame('xh', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678.09', $locale->number(12345678.09));
        $this->assertSame('1 234.56%', $locale->percent(12.3456));
    }
}
