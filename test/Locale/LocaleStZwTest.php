<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSt;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryZw;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleStLs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleStZwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleStZw();

        $this->assertEquals(new LanguageSt(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryZw(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('st_ZW', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Sesotho', $locale->endonym());
        $this->assertSame('lang="st-ZW"', $locale->htmlAttributes());
        $this->assertSame('st-ZW', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
