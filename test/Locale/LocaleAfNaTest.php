<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAf;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleAfNa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleAfNaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleAfNa();

        $this->assertEquals(new LanguageAf(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryNa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('af_NA', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="af-NA"', $locale->htmlAttributes());
        $this->assertSame('af-NA', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
