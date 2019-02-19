<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKam;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryKe;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleKamKe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleKamKeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKamKe();

        $this->assertEquals(new LanguageKam(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryKe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('kam_KE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="kam"', $locale->htmlAttributes());
        $this->assertSame('kam', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
