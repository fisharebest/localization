<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRo;
use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryRo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleRo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleRoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleRo();

        $this->assertEquals(new LanguageRo(), $locale->language());
        $this->assertEquals(new PluralRule5(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryRo(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ro_RO', $locale->code());
        $this->assertSame('romanian_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('română', $locale->endonym());
        $this->assertSame('lang="ro"', $locale->htmlAttributes());
        $this->assertSame('ro', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
