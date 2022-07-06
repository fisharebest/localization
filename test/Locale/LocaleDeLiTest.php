<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDeLi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleDeLiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDeLi();

        $this->assertEquals(new LanguageDe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryLi(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('de_LI', $locale->code());
        $this->assertSame('german2_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="de-LI"', $locale->htmlAttributes());
        $this->assertSame('de-LI', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12’345’678.09', $locale->number(12345678.09));
        $this->assertSame('1’234.56%', $locale->percent(12.3456));
    }
}
