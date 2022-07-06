<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGa;
use Fisharebest\Localization\PluralRule\PluralRule11;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleGaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleGa();

        $this->assertEquals(new LanguageGa(), $locale->language());
        $this->assertEquals(new PluralRule11(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryIe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ga_IE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Gaeilge', $locale->endonym());
        $this->assertSame('lang="ga"', $locale->htmlAttributes());
        $this->assertSame('ga', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
