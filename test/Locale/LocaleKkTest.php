<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKk;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryKz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKk();

        $this->assertEquals(new LanguageKk(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryKz(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('kk_KZ', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('қазақ тілі', $locale->endonym());
        $this->assertSame('lang="kk"', $locale->htmlAttributes());
        $this->assertSame('kk', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
