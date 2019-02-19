<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDz;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptTibt;
use Fisharebest\Localization\Territory\TerritoryBt;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleDzBt class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleDzBtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDzBt();

        $this->assertEquals(new LanguageDz(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptTibt(), $locale->script());
        $this->assertEquals(new TerritoryBt(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('dz_BT', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('༠༡༢༣༤༥༦༧༨༩', $locale->digits('0123456789'));
        $this->assertSame('lang="dz"', $locale->htmlAttributes());
        $this->assertSame('dz', $locale->languageTag());
        $this->assertSame('-༡༢༣', $locale->number(-123));
        $this->assertSame('༡,༢༣,༤༥,༦༧༨.༠༩', $locale->number(12345678.09));
        $this->assertSame('༡,༢༣༤.༥༦ %', $locale->percent(12.3456));
    }
}
