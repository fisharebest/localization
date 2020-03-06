<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTg;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryTj;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTg();

        $this->assertEquals(new LanguageTg(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptCyrl(), $locale->script());
        $this->assertEquals(new TerritoryTj(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('tg_TJ', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('тоҷикӣ', $locale->endonym());
        $this->assertSame('lang="tg"', $locale->htmlAttributes());
        $this->assertSame('tg', $locale->languageTag());
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
