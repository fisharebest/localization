<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCeRu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCeRuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCeRu();

        $this->assertEquals(new LanguageCe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryRu(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ce_RU', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('нохчийн', $locale->endonym());
        $this->assertSame('lang="ce"', $locale->htmlAttributes());
        $this->assertSame('ce', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56 %', $locale->percent(12.3456));
    }
}
