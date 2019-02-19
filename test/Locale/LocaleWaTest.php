<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageWa;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryBe;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleWa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleWaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleWa();

        $this->assertEquals(new LanguageWa(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryBe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('wa_BE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Walon', $locale->endonym());
        $this->assertSame('lang="wa"', $locale->htmlAttributes());
        $this->assertSame('wa', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
