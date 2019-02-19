<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryPk;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleUrPk class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleUrPkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleUrPk();

        $this->assertEquals(new LanguageUr(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptArab(), $locale->script());
        $this->assertEquals(new TerritoryPk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('٠١٢٣٤٥٦٧٨٩', $locale->digits('0123456789'));
        $this->assertSame('lang="ur" dir="rtl"', $locale->htmlAttributes());
        $this->assertSame('١,٢٣,٤٥,٦٧٨.٠٩', $locale->number(12345678.09));
        $this->assertSame('‎-١٢٣', $locale->number(-123));
        $this->assertSame('١,٢٣٤.٥٦%', $locale->percent(12.3456));
    }
}
