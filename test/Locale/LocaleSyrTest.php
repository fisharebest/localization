<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSyr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptSyrc;
use Fisharebest\Localization\Territory\TerritoryIq;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTig class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSyrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSyr();

        $this->assertEquals(new LanguageSyr(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptSyrc(), $locale->script());
        $this->assertEquals(new TerritoryIq(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Syriac', $locale->endonym());
        $this->assertSame('lang="syr" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
