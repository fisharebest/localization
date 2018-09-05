<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryRu;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleCeLatn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleCeLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCeLatn();

        $this->assertEquals(new LanguageCe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryRu(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ce_RU@latin', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Chechen', $locale->endonym());
        $this->assertSame('lang="ce-Latn"', $locale->htmlAttributes());
        $this->assertSame('ce-Latn', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56 %', $locale->percent(12.3456));
    }
}
