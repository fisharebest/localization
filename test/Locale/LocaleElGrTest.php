<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGrek;
use Fisharebest\Localization\Territory\TerritoryGr;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleElGr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleElGrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleElGr();

        $this->assertEquals(new LanguageEl(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptGrek(), $locale->script());
        $this->assertEquals(new TerritoryGr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('el_GR', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="el"', $locale->htmlAttributes());
        $this->assertSame('el', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
