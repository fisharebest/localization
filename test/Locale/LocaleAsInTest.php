<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAs;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleAsIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleAsInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleAsIn();

        $this->assertEquals(new LanguageAs(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptBeng(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('as_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
        $this->assertSame('lang="as"', $locale->htmlAttributes());
        $this->assertSame('as', $locale->languageTag());
        $this->assertSame('-১২৩', $locale->number(-123));
        $this->assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
        $this->assertSame('১,২৩৪.৫৬%', $locale->percent(12.3456));
    }
}
