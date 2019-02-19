<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJv;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJava;
use Fisharebest\Localization\Territory\TerritoryId;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleKo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleJvTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleJv();

        $this->assertEquals(new LanguageJv(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptJava(), $locale->script());
        $this->assertEquals(new TerritoryId(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('jv_ID', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('꧐꧑꧒꧓꧔꧕꧖꧗꧘꧙', $locale->digits('0123456789'));
        $this->assertSame('ꦧꦱꦗꦮ', $locale->endonym());
        $this->assertSame('lang="jv"', $locale->htmlAttributes());
        $this->assertSame('jv', $locale->languageTag());
        $this->assertSame('-꧑꧒꧓', $locale->number(-123));
        $this->assertSame('꧑꧒,꧓꧔꧕,꧖꧗꧘.꧐꧙', $locale->number(12345678.09));
        $this->assertSame('꧑,꧒꧓꧔.꧕꧖%', $locale->percent(12.3456));
    }
}
