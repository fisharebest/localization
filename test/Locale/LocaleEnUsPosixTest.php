<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEn;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryUs;
use Fisharebest\Localization\Variant\VariantPosix;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEnUsPosix class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnUsPosixTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleEnUsPosix();

        $this->assertEquals(new LanguageEn(), $locale->language());
        $this->assertEquals(new PluralRule1(), $locale->pluralRule());
        $this->assertEquals(new ScriptLatn(), $locale->script());
        $this->assertEquals(new TerritoryUs(), $locale->territory());
        $this->assertEquals(new VariantPosix(), $locale->variant());
        $this->assertSame('POSIX', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('lang="en-US-posix"', $locale->htmlAttributes());
        $this->assertSame('en-US-posix', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12345678.09', $locale->number(12345678.09));
        $this->assertSame('1234.56%', $locale->percent(12.3456));
    }
}
