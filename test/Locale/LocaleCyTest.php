<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCy;
use Fisharebest\Localization\PluralRule\PluralRuleWelsh;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGb;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleCy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleCyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCy();

        $this->assertEquals(new LanguageCy(), $locale->language());
        $this->assertEquals(new PluralRuleWelsh(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryGb(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('cy_GB', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Cymraeg', $locale->endonym());
        $this->assertSame('lang="cy"', $locale->htmlAttributes());
        $this->assertSame('cy', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
