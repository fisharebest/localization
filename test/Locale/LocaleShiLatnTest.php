<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageShi;
use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleShiLatn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleShiLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleShiLatn();

        $this->assertEquals(new LanguageShi(), $locale->language());
        $this->assertEquals(new PluralRuleTachelhit(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryMa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('shi_MA@latin', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('tamazight', $locale->endonym());
        $this->assertSame('lang="shi-Latn"', $locale->htmlAttributes());
        $this->assertSame('shi-Latn', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
