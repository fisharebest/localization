<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEeGh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEeGhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEeGh();

        $this->assertEquals(new LanguageEe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryGh(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ee_GH', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ee"', $locale->htmlAttributes());
        $this->assertSame('ee', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
