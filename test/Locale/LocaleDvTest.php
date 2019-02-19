<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDv;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptThaa;
use Fisharebest\Localization\Territory\TerritoryMv;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleDv class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleDvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDv();

        $this->assertEquals(new LanguageDv(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptThaa(), $locale->script());
        $this->assertEquals(new TerritoryMv(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('dv_MV', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('ތާނަ', $locale->endonym());
        $this->assertSame('lang="dv" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('dv', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
