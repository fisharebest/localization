<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJa;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJpan;
use Fisharebest\Localization\Territory\TerritoryJp;
use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the LocaleJa class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class LocaleJaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleJa();

        $this->assertEquals(new LanguageJa(), $locale->language());
        $this->assertEquals(new PluralRule0(), $locale->pluralRule());
        $this->assertEquals(new ScriptJpan(), $locale->script());
        $this->assertEquals(new TerritoryJp(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('ja_JP', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('0123456789', $locale->digits('0123456789'));
        $this->assertSame('日本語', $locale->endonym());
        $this->assertSame('lang="ja"', $locale->htmlAttributes());
        $this->assertSame('ja', $locale->languageTag());
        $this->assertSame('-123', $locale->number(-123));
        $this->assertSame('12,345,678.09', $locale->number(12345678.09));
        $this->assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
