<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSk;
use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSkSk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSkSkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSkSk();

        $this->assertEquals(new LanguageSk(), $locale->language());
        $this->assertEquals(new PluralRule8(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritorySk(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('sk_SK', $locale->code());
        $this->assertSame('slovak_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="sk"', $locale->htmlAttributes());
        $this->assertSame('sk', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
