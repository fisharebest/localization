<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCcp;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptCakm;
use Fisharebest\Localization\Territory\TerritoryBd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCcpBd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleCcpBdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCcpBd();

        $this->assertEquals(new LanguageCcp(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptCakm(), $locale->script());
        $this->assertEquals(new TerritoryBd(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ccp_BD', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('𑄶𑄷𑄸𑄹𑄺𑄻𑄼𑄽𑄾𑄿', $locale->digits('0123456789'));
        $this->assertSame('𑄌𑄋𑄴𑄟𑄳𑄦', $locale->endonym());
        $this->assertSame('lang="ccp"', $locale->htmlAttributes());
        $this->assertSame('ccp', $locale->languageTag());
        $this->assertSame('-𑄷𑄸𑄹', $locale->number(-123));
        $this->assertSame('𑄷,𑄸𑄹,𑄺𑄻,𑄼𑄽𑄾.𑄶𑄿', $locale->number(12345678.09));
        $this->assertSame('𑄷,𑄸𑄹𑄺.𑄻𑄼%', $locale->percent(12.3456));
    }
}
