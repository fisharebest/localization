<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptOrya;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleOrIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleOrInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleOrIn();

        $this->assertEquals(new LanguageOr(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptOrya(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('or_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('୦୧୨୩୪୫୬୭୮୯', $locale->digits('0123456789'));
        $this->assertSame('lang="or"', $locale->htmlAttributes());
        $this->assertSame('or', $locale->languageTag());
        $this->assertSame('-୧୨୩', $locale->number(-123));
        $this->assertSame('୧,୨୩,୪୫,୬୭୮.୦୯', $locale->number(12345678.09));
        $this->assertSame('୧,୨୩୪.୫୬%', $locale->percent(12.3456));
    }
}
