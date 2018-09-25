<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNah;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMx;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleNah class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleNahTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNah();

        $this->assertEquals(new LanguageNah(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryMx(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('nah_MX', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Nahuatlahtolli', $locale->endonym());
        $this->assertSame('lang="nah"', $locale->htmlAttributes());
        $this->assertSame('nah', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
