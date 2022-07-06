<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTaml;
use Fisharebest\Localization\Territory\TerritoryMy;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTaMy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTaMyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTaMy();

        $this->assertEquals(new LanguageTa(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptTaml(), $locale->script());
        $this->assertEquals(new TerritoryMy(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ta_MY', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        $this->assertSame('lang="ta-MY"', $locale->htmlAttributes());
        $this->assertSame('ta-MY', $locale->languageTag());
        $this->assertSame('-௧௨௩', $locale->number(-123));
        $this->assertSame('௧௨,௩௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        $this->assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
