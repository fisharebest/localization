<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTr;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCy;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleTrCy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleTrCyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTrCy();

        $this->assertEquals(new LanguageTr(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryCy(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('turkish_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="tr-CY"', $locale->htmlAttributes());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12.345.678,09', $locale->number(12345678.09));
        $this->assertSame('%1.234,56', $locale->percent(12.3456));
    }
}
