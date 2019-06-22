<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBg;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBg;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBg class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleBgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBg();

        $this->assertEquals(new LanguageBg(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryBg(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('bg_BG', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('български', $locale->endonym());
        $this->assertSame('lang="bg"', $locale->htmlAttributes());
        $this->assertSame('bg', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1234,56%', $locale->percent(12.3456));
    }
}
