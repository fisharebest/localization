<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTaml;
use Fisharebest\Localization\Territory\TerritoryLk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTaLk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTaLkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTaLk();

        $this->assertEquals(new LanguageTa(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptTaml(), $locale->script());
        $this->assertEquals(new TerritoryLk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ta_LK', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        $this->assertSame('lang="ta-LK"', $locale->htmlAttributes());
        $this->assertSame('ta-LK', $locale->languageTag());
        $this->assertSame('-௧௨௩', $locale->number(-123));
        $this->assertSame('௧,௨௩,௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        $this->assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
