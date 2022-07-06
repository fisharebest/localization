<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLn;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCf;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleLnCf class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleLnCfTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleLnCf();

        $this->assertEquals(new LanguageLn(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryCf(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ln_CF', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="ln-CF"', $locale->htmlAttributes());
        $this->assertSame('ln-CF', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
