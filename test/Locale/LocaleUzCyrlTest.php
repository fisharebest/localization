<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUz;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryUz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleUzCyrl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleUzCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleUzCyrl();

        $this->assertEquals(new LanguageUz(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryUz(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="uz-Cyrl"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
