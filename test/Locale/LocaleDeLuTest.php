<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDeLu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleDeLuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleDeLu();

        $this->assertEquals(new LanguageDe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryLu(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('de_LU', $locale->code());
        $this->assertSame('german2_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="de-LU"', $locale->htmlAttributes());
        $this->assertSame('de-LU', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
