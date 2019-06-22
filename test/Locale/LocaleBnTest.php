<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBn;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Territory\TerritoryBd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleBnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBn();

        $this->assertEquals(new LanguageBn(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptBeng(), $locale->script());
        $this->assertEquals(new TerritoryBd(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('bn_BD', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
        $this->assertSame('বাংলা', $locale->endonym());
        $this->assertSame('lang="bn"', $locale->htmlAttributes());
        $this->assertSame('bn', $locale->languageTag());
        $this->assertSame('-১২৩', $locale->number(-123));
        $this->assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
        $this->assertSame('১,২৩৪.৫৬%', $locale->percent(12.3456));
    }
}
