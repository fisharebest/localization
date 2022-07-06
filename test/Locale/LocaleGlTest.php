<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEs;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleGl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleGlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleGl();

        $this->assertEquals(new LanguageGl(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryEs(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('gl_ES', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('galego', $locale->endonym());
        $this->assertSame('lang="gl"', $locale->htmlAttributes());
        $this->assertSame('gl', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
