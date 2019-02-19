<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIa;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFr;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleIaFr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleIaFrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleIaFr();

        $this->assertEquals(new LanguageIa(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryFr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ia_FR', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ia-FR"', $locale->htmlAttributes());
        $this->assertSame('ia-FR', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
