<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTr;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTr();

        $this->assertEquals(new LanguageTr(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryTr(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('turkish_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Türkçe', $locale->endonym());
        $this->assertSame('lang="tr"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('%1.234,56', $locale->percent(12.3456));
    }
}
