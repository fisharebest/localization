<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFoFo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFoFoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFoFo();

        $this->assertEquals(new LanguageFo(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryFo(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('fo_FO', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="fo"', $locale->htmlAttributes());
        $this->assertSame('fo', $locale->languageTag());
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
