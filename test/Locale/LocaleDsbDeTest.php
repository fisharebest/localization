<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDsb;
use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryDe;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleDsbDe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleDsbDeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDsbDe();

        $this->assertEquals(new LanguageDsb(), $locale->language());
        $this->assertEquals(new PluralRule10(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryDe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('dsb_DE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="dsb"', $locale->htmlAttributes());
        $this->assertSame('dsb', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
