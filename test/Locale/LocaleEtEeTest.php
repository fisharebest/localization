<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEt;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEe;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleEtEe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleEtEeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEtEe();

        $this->assertEquals(new LanguageEt(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryEe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('et_EE', $locale->code());
        $this->assertSame('estonian_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="et"', $locale->htmlAttributes());
        $this->assertSame('et', $locale->languageTag());
        $this->assertSame('−123', $locale->number(-123));
        $this->assertSame('12345 678,09', $locale->number(12345678.09));
        $this->assertSame('1234,56%', $locale->percent(12.3456));
    }
}
