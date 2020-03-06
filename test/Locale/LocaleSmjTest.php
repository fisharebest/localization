<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSmj;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSms class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSmjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSmj();

        $this->assertEquals(new LanguageSmj(), $locale->language());
        $this->assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritorySe(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('smj_SE', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('julevsámegiella', $locale->endonym());
        $this->assertSame('lang="smj"', $locale->htmlAttributes());
        $this->assertSame('smj', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
