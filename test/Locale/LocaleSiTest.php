<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSi;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptSinh;
use Fisharebest\Localization\Territory\TerritoryLk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSi();

        $this->assertEquals(new LanguageSi(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptSinh(), $locale->script());
        $this->assertEquals(new TerritoryLk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('si_LK', $locale->code());
        $this->assertSame('sinhala_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('සිංහල', $locale->endonym());
        $this->assertSame('lang="si"', $locale->htmlAttributes());
        $this->assertSame('si', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
