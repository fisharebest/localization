<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSu;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptSund;
use Fisharebest\Localization\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSu();

        $this->assertEquals(new LanguageSu(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptSund(), $locale->script());
        $this->assertEquals(new TerritoryId(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('su_ID', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('᮰᮱᮲᮳᮴᮵᮶᮷᮸᮹', $locale->digits('0123456789'));
        $this->assertSame('ᮘᮞ ᮞᮥᮔ᮪ᮓ', $locale->endonym());
        $this->assertSame('lang="su"', $locale->htmlAttributes());
        $this->assertSame('su', $locale->languageTag());
        $this->assertSame('-᮱᮲᮳', $locale->number(-123));
        $this->assertSame('᮱᮲,᮳᮴᮵,᮶᮷᮸.᮰᮹', $locale->number(12345678.09));
        $this->assertSame('᮱,᮲᮳᮴.᮵᮶%', $locale->percent(12.3456));
    }
}
