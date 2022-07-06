<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptHebr;
use Fisharebest\Localization\Territory\TerritoryIl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHeIl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHeIlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleHeIl();

        $this->assertEquals(new LanguageHe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptHebr(), $locale->script());
        $this->assertEquals(new TerritoryIl(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('he_IL', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="he" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('he', $locale->languageTag());
        $this->assertSame('‎-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
