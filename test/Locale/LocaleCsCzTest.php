<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCs;
use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCsCz class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleCsCzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCsCz();

        $this->assertEquals(new LanguageCs(), $locale->language());
        $this->assertEquals(new PluralRule8(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryCz(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('cs_CZ', $locale->code());
        $this->assertSame('czech_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="cs"', $locale->htmlAttributes());
        $this->assertSame('cs', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12 345 678,09', $locale->number(12345678.09));
        $this->assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
