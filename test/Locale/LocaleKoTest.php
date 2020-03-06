<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKore;
use Fisharebest\Localization\Territory\TerritoryKr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKo();

        $this->assertEquals(new LanguageKo(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptKore(), $locale->script());
        $this->assertEquals(new TerritoryKr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ko_KR', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('한국어', $locale->endonym());
        $this->assertSame('lang="ko"', $locale->htmlAttributes());
        $this->assertSame('ko', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
