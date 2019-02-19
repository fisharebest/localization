<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGl;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleDaGl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleDaGlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDaGl();

        $this->assertEquals(new LanguageDa(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryGl(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('da_GL', $locale->code());
        $this->assertSame('danish_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="da-GL"', $locale->htmlAttributes());
        $this->assertSame('da-GL', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
