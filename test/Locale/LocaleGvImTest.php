<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGv;
use Fisharebest\Localization\PluralRule\PluralRuleManx;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGvIm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleGvImTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleGvIm();

        $this->assertEquals(new LanguageGv(), $locale->language());
        $this->assertEquals(new PluralRuleManx(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryIm(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('gv_IM', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="gv"', $locale->htmlAttributes());
        $this->assertSame('gv', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
