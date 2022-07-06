<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTaml;
use Fisharebest\Localization\Territory\TerritorySg;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTaSg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTaSgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTaSg();

        $this->assertEquals(new LanguageTa(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptTaml(), $locale->script());
        $this->assertEquals(new TerritorySg(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ta_SG', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        $this->assertSame('lang="ta-SG"', $locale->htmlAttributes());
        $this->assertSame('ta-SG', $locale->languageTag());
        $this->assertSame('-௧௨௩', $locale->number(-123));
        $this->assertSame('௧௨,௩௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        $this->assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
