<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHr;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryHr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleHrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleHr();

        $this->assertEquals(new LanguageHr(), $locale->language());
        $this->assertEquals(new PluralRule7(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryHr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('hr_HR', $locale->code());
        $this->assertSame('croatian_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('hrvatski', $locale->endonym());
        $this->assertSame('lang="hr"', $locale->htmlAttributes());
        $this->assertSame('hr', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
