<?php namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the LocaleNeIn class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class LocaleNeInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNeIn();

        $this->assertEquals(new LanguageNe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptDeva(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ne_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        $this->assertSame('lang="ne-IN"', $locale->htmlAttributes());
        $this->assertSame('ne-IN', $locale->languageTag());
        $this->assertSame('-१२३', $locale->number(-123));
        $this->assertSame('१२,३४५,६७८.०९', $locale->number(12345678.09));
        $this->assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
