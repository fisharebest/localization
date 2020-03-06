<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptGeor;
use Fisharebest\Localization\Territory\TerritoryGe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKaGe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKaGeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKaGe();

        $this->assertEquals(new LanguageKa(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptGeor(), $locale->script());
        $this->assertEquals(new TerritoryGe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ka_GE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ka"', $locale->htmlAttributes());
        $this->assertSame('ka', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1234,56%', $locale->percent(12.3456));
    }
}
