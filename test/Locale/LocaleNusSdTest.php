<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNus;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySd;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleNusSd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleNusSdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNusSd();

        $this->assertEquals(new LanguageNus(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritorySd(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('nus_SD', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="nus"', $locale->htmlAttributes());
        $this->assertSame('nus', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
