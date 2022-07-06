<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMy;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptMymr;
use Fisharebest\Localization\Territory\TerritoryMm;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleMyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMy();

        $this->assertEquals(new LanguageMy(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptMymr(), $locale->script());
        $this->assertEquals(new TerritoryMm(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('my_MM', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('၀၁၂၃၄၅၆၇၈၉', $locale->digits('0123456789'));
        $this->assertSame('မြန်မာ', $locale->endonym());
        $this->assertSame('lang="my"', $locale->htmlAttributes());
        $this->assertSame('my', $locale->languageTag());
        $this->assertSame('-၁၂၃', $locale->number(-123));
        $this->assertSame('၁၂၃၄၅,၆၇၈.၀၉', $locale->number(12345678.09));
        $this->assertSame('၁၂၃၄.၅၆%', $locale->percent(12.3456));
    }
}
