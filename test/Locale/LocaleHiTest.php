<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHi;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleHi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleHiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleHi();

        $this->assertEquals(new LanguageHi(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptDeva(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('hi_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        $this->assertSame('हिन्दी', $locale->endonym());
        $this->assertSame('lang="hi"', $locale->htmlAttributes());
        $this->assertSame('hi', $locale->languageTag());
        $this->assertSame('-१२३', $locale->number(-123));
        $this->assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
        $this->assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
