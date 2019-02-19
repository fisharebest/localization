<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHy;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptArmn;
use Fisharebest\Localization\Territory\TerritoryAm;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleHyAm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleHyAmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleHyAm();

        $this->assertEquals(new LanguageHy(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptArmn(), $locale->script());
        $this->assertEquals(new TerritoryAm(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('hy_AM', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="hy"', $locale->htmlAttributes());
        $this->assertSame('hy', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
