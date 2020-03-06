<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKs;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKsIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKsInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKsIn();

        $this->assertEquals(new LanguageKs(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ks_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('lang="ks" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('ks', $locale->languageTag());
        $this->assertSame('١٬٢٣٬٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('‎-‎١٢٣', $locale->number(-123));
        $this->assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
