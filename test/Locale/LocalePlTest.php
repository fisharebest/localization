<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePl;
use Fisharebest\Localization\PluralRule\PluralRule9;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocalePl();

        $this->assertEquals(new LanguagePl(), $locale->language());
        $this->assertEquals(new PluralRule9(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryPl(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('pl_PL', $locale->code());
        $this->assertSame('polish_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('polski', $locale->endonym());
        $this->assertSame('lang="pl"', $locale->htmlAttributes());
        $this->assertSame('pl', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1234,56%', $locale->percent(12.3456));
    }
}
