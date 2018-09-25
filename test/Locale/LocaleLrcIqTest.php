<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLrc;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIq;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleLrcIq class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleLrcIqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleLrcIq();

        $this->assertEquals(new LanguageLrc(), $locale->language());
        $this->assertEquals(new PluralRule12(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryIq(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('lrc_IQ', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('لۊری شومالی', $locale->endonym());
        $this->assertSame('lang="lrc-IQ" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('lrc-IQ', $locale->languageTag());
        $this->assertSame('١٢٬٣٤٥٬٦٧٨٫٠٩', $locale->number(12345678.09));
        $this->assertSame('‎-‎١٢٣', $locale->number(-123));
        $this->assertSame('١٬٢٣٤٫٥٦٪', $locale->percent(12.3456));
    }
}
