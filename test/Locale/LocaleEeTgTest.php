<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEe;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTg;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleEeTg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleEeTgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEeTg();

        $this->assertEquals(new LanguageEe(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryTg(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ee_TG', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ee-TG"', $locale->htmlAttributes());
        $this->assertSame('ee-TG', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
