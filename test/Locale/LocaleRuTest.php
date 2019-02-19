<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRu;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleRu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleRu();

        $this->assertEquals(new LanguageRu(), $locale->language());
        $this->assertEquals(new PluralRule7(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryRu(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ru_RU', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('русский', $locale->endonym());
        $this->assertSame('lang="ru"', $locale->htmlAttributes());
        $this->assertSame('ru', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
