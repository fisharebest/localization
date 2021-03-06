<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVi;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryVn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleViTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleVi();

        $this->assertEquals(new LanguageVi(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryVn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('vietnamese_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Tiếng Việt', $locale->endonym());
        $this->assertSame('lang="vi"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('1.234,56%', $locale->percent(12.3456));
    }
}
