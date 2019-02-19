<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTl;
use Fisharebest\Localization\PluralRule\PluralRuleTagalog;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPh;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleTl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleTlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTl();

        $this->assertEquals(new LanguageTl(), $locale->language());
        $this->assertEquals(new PluralRuleTagalog(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryPh(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('tl_PH', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Tagalog', $locale->endonym());
        $this->assertSame('lang="tl"', $locale->htmlAttributes());
        $this->assertSame('tl', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
