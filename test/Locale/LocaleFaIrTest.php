<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFa;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleFaIr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleFaIrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFaIr();

        $this->assertEquals(new LanguageFa(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryIr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('fa_IR', $locale->code());
        $this->assertSame('persian_ci', $locale->collation());
        $this->assertSame('۰۱۲۳۴۵۶۷۸۹', $locale->digits('0123456789'));
        $this->assertSame('lang="fa" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('fa', $locale->languageTag());
        $this->assertSame('۱۲٬۳۴۵٬۶۷۸٫۰۹', $locale->number(12345678.09));
        $this->assertSame('‎−۱۲۳', $locale->number(-123));
        $this->assertSame('۱٬۲۳۴٫۵۶٪', $locale->percent(12.3456));
    }
}
