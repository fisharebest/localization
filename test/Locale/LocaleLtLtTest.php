<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLt;
use Fisharebest\Localization\PluralRule\PluralRule6;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleLtLt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleLtLtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleLtLt();

        $this->assertEquals(new LanguageLt(), $locale->language());
        $this->assertEquals(new PluralRule6(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryLt(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('lt_LT', $locale->code());
        $this->assertSame('lithuanian_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="lt"', $locale->htmlAttributes());
        $this->assertSame('lt', $locale->languageTag());
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
