<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKu;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTr;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleKu class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleKuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKu();

        $this->assertEquals(new LanguageKu(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryTr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ku_TR', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Kurdî', $locale->endonym());
        $this->assertSame('lang="ku"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('%1.234,56', $locale->percent(12.3456));
    }
}
