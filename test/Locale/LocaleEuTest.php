<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEu;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEu();

        $this->assertEquals(new LanguageEu(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryEs(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('eu_ES', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('euskara', $locale->endonym());
        $this->assertSame('lang="eu"', $locale->htmlAttributes());
        $this->assertSame('eu', $locale->languageTag());
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('% 1.234,56', $locale->percent(12.3456));
    }
}
