<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIs;
use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryIs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleIsIs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleIsIsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleIsIs();

        $this->assertEquals(new LanguageIs(), $locale->language());
        $this->assertEquals(new PluralRule15(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryIs(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('is_IS', $locale->code());
        $this->assertSame('icelandic_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="is"', $locale->htmlAttributes());
        $this->assertSame('is', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
