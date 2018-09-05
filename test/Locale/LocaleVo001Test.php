<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleVo001 class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleVo001Test extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleVo001();

        $this->assertEquals(new LanguageVo(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new Territory001(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="vo"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
