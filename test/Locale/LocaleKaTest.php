<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGeor;
use Fisharebest\Localization\Territory\TerritoryGe;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleKa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleKaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKa();

        $this->assertEquals(new LanguageKa(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptGeor(), $locale->script());
        $this->assertEquals(new TerritoryGe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ka_GE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('ქართული', $locale->endonym());
        $this->assertSame('lang="ka"', $locale->htmlAttributes());
        $this->assertSame('ka', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1234,56%', $locale->percent(12.3456));
    }
}
