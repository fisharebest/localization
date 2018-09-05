<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKaj;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNg;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleKaj class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleKajTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKaj();

        $this->assertEquals(new LanguageKaj(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryNg(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('kaj_NG', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Jju', $locale->endonym());
        $this->assertSame('lang="kaj"', $locale->htmlAttributes());
        $this->assertSame('kaj', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
