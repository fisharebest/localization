<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRu;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryMd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleRuMd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuMdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleRuMd();

        $this->assertEquals(new LanguageRu(), $locale->language());
        $this->assertEquals(new PluralRule7(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryMd(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ru_MD', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ru-MD"', $locale->htmlAttributes());
        $this->assertSame('ru-MD', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
