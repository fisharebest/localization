<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSr;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSrCyrlRs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrCyrlRsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSrCyrlRs();

        $this->assertEquals(new LanguageSr(), $locale->language());
        $this->assertEquals(new PluralRule7(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryRs(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('sr_RS', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="sr"', $locale->htmlAttributes());
        $this->assertSame('sr', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
