<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageZh;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHant;
use Fisharebest\Localization\Territory\TerritoryTw;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleZhHantTw class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleZhHantTwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleZhHantTw();

        $this->assertEquals(new LanguageZh(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptHant(), $locale->script());
        $this->assertEquals(new TerritoryTw(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="zh-Hant-TW"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12345,678.09', $locale->number(12345678.09));
        $this->assertSame('1234.56%', $locale->percent(12.3456));
    }
}
