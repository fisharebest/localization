<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCkb;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIq;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleCkbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCkb();

        $this->assertEquals(new LanguageCkb(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryIq(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ckb_IQ', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('کوردیی ناوەندی', $locale->endonym());
        $this->assertSame('lang="ckb" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('‏-١٢٣', $locale->number(-123));
        $this->assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
