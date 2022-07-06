<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEo001 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEo001Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEo001();

        $this->assertEquals(new LanguageEo(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new Territory001(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('eo_001', $locale->code());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="eo"', $locale->htmlAttributes());
        $this->assertSame('eo', $locale->languageTag());
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
