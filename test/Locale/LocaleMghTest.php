<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMgh;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMz;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleMgh class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleMghTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleMgh();

        $this->assertEquals(new LanguageMgh(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryMz(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('mgh_MZ', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Makua', $locale->endonym());
        $this->assertSame('lang="mgh"', $locale->htmlAttributes());
        $this->assertSame('mgh', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
