<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAm;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEt;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleAm class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleAmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleAm();

        $this->assertEquals(new LanguageAm(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptEthi(), $locale->script());
        $this->assertEquals(new TerritoryEt(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('am_ET', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('አማርኛ', $locale->endonym());
        $this->assertSame('lang="am"', $locale->htmlAttributes());
        $this->assertSame('am', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
