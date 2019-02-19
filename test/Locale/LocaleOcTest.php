<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOc;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFr;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleOc class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleOcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleOc();

        $this->assertEquals(new LanguageOc(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryFr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('oc_FR', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lenga d’òc', $locale->endonym());
        $this->assertSame('lang="oc"', $locale->htmlAttributes());
        $this->assertSame('oc', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
