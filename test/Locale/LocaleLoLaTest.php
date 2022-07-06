<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLo;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLaoo;
use Fisharebest\Localization\Territory\TerritoryLa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleLoLa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleLoLaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleLoLa();

        $this->assertEquals(new LanguageLo(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptLaoo(), $locale->script());
        $this->assertEquals(new TerritoryLa(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('lo_LA', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('໐໑໒໓໔໕໖໗໘໙', $locale->digits('0123456789'));
        $this->assertSame('lang="lo"', $locale->htmlAttributes());
        $this->assertSame('lo', $locale->languageTag());
        $this->assertSame('-໑໒໓', $locale->number(-123));
        $this->assertSame('໑໒.໓໔໕.໖໗໘,໐໙', $locale->number(12345678.09));
        $this->assertSame('໑.໒໓໔,໕໖%', $locale->percent(12.3456));
    }
}
