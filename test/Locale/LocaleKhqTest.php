<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKhq;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKhq class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleKhqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKhq();

        $this->assertEquals(new LanguageKhq(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryMl(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('khq_ML', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Koyra ciini', $locale->endonym());
        $this->assertSame('lang="khq"', $locale->htmlAttributes());
        $this->assertSame('khq', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678.09', $locale->number(12345678.09));
        $this->assertSame('1 234.56%', $locale->percent(12.3456));
    }
}
