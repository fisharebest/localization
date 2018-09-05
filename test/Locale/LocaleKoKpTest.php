<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKore;
use Fisharebest\Localization\Territory\TerritoryKp;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleKoKp class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleKoKpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKoKp();

        $this->assertEquals(new LanguageKo(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptKore(), $locale->script());
        $this->assertEquals(new TerritoryKp(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ko_KP', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ko-KP"', $locale->htmlAttributes());
        $this->assertSame('ko-KP', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
