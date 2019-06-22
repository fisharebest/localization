<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptMlym;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMlIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleMlInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMlIn();

        $this->assertEquals(new LanguageMl(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptMlym(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ml_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('൦൧൨൩൪൫൬൭൮൯', $locale->digits('0123456789'));
        $this->assertSame('lang="ml"', $locale->htmlAttributes());
        $this->assertSame('ml', $locale->languageTag());
        $this->assertSame('-൧൨൩', $locale->number(-123));
        $this->assertSame('൧,൨൩,൪൫,൬൭൮.൦൯', $locale->number(12345678.09));
        $this->assertSame('൧,൨൩൪.൫൬%', $locale->percent(12.3456));
    }
}
