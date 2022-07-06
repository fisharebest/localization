<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSd;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSd();

        $this->assertEquals(new LanguageSd(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryPk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('sd_PK', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('سنڌي', $locale->endonym());
        $this->assertSame('lang="sd" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('sd', $locale->languageTag());
        $this->assertSame('؜-١٢٣', $locale->number(-123));
        $this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('١٬٢٣٤٫٥٦٪؜', $locale->percent(12.3456));
    }
}
