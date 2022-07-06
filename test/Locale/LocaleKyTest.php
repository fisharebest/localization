<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKy;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryKg;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleKyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleKy();

        $this->assertEquals(new LanguageKy(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryKg(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ky_KG', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('кыргызча', $locale->endonym());
        $this->assertSame('lang="ky"', $locale->htmlAttributes());
        $this->assertSame('ky', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
