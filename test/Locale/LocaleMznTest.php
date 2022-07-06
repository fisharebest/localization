<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMzn;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMzn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleMznTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMzn();

        $this->assertEquals(new LanguageMzn(), $locale->language());
        $this->assertEquals(new PluralRule12(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryIr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('mzn_IR', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        $this->assertSame('مازرونی', $locale->endonym());
        $this->assertSame('lang="mzn" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('mzn', $locale->languageTag());
        $this->assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        $this->assertSame('‎-‎۱۲۳', $locale->number(-123));
        $this->assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
