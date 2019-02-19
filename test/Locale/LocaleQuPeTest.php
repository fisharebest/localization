<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageQu;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPe;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleQuPe class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleQuPeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleQuPe();

        $this->assertEquals(new LanguageQu(), $locale->language());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryPe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('qu_PE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="qu"', $locale->htmlAttributes());
        $this->assertSame('qu', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56 %', $locale->percent(12.3456));
    }
}
