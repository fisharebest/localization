<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNds;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNdsNl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNdsNlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNdsNl();

        $this->assertEquals(new LanguageNds(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryNl(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('nds_NL', $locale->code());
        $this->assertSame('german2_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Neddersass’sch', $locale->endonym());
        $this->assertSame('lang="nds-NL"', $locale->htmlAttributes());
        $this->assertSame('nds-NL', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
