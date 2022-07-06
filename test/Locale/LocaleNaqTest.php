<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNaq;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNaq class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNaqTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNaq();

        $this->assertEquals(new LanguageNaq(), $locale->language());
        $this->assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryNa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('naq_NA', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('Khoekhoegowab', $locale->endonym());
        $this->assertSame('lang="naq"', $locale->htmlAttributes());
        $this->assertSame('naq', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
