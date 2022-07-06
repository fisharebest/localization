<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageQu;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleQuEc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleQuEcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleQuEc();

        $this->assertEquals(new LanguageQu(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryEc(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('qu_EC', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="qu-EC"', $locale->htmlAttributes());
        $this->assertSame('qu-EC', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56 %', $locale->percent(12.3456));
    }
}
