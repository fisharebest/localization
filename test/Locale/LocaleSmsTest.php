<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSms;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSms class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleSmsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSms();

        $this->assertEquals(new LanguageSms(), $locale->language());
        $this->assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryFi(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('sms_FI', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('sääʹmǩiõll', $locale->endonym());
        $this->assertSame('lang="sms"', $locale->htmlAttributes());
        $this->assertSame('sms', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
