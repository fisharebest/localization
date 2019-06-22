<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Variant\VariantValencia;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCaEsValencia class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleCaEsValenciaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCaEsValencia();

        $this->assertEquals(new LanguageCa(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryEs(), $locale->territory());
        $this->assertEquals(new VariantValencia(), $locale->variant());
        $this->assertSame('ca_ES@valencia', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ca-valencia"', $locale->htmlAttributes());
        $this->assertSame('ca-valencia', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
