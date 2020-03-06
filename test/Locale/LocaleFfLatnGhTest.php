<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFf;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFfLatnGh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFfLatnGhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFfLatnGh();

        $this->assertEquals(new LanguageFf(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryGh(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ff_GH', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Pulaar', $locale->endonym());
        $this->assertSame('lang="ff-GH"', $locale->htmlAttributes());
        $this->assertSame('ff-GH', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
