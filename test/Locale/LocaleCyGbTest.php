<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCy;
use Fisharebest\Localization\PluralRule\PluralRuleWelsh;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCyGb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCyGbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCyGb();

        $this->assertEquals(new LanguageCy(), $locale->language());
        $this->assertEquals(new PluralRuleWelsh(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryGb(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('cy_GB', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="cy"', $locale->htmlAttributes());
        $this->assertSame('cy', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
