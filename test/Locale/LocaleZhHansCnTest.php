<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageZh;
use Fisharebest\Localization\Locale\LocaleZhHansCn;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptHans;
use Fisharebest\Localization\Territory\TerritoryCn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleZhHansCn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleZhHansCn
 * @covers \Fisharebest\Localization\Locale\LocaleZhHans
 */
class LocaleZhHansCnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleZhHansCn();

        self::assertEquals(new LanguageZh(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptHans(), $locale->script());
        self::assertEquals(new TerritoryCn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('zh_CN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('中文', $locale->endonym());
        self::assertSame('中文', $locale->endonymSortable());
        self::assertSame('lang="zh"', $locale->htmlAttributes());
        self::assertSame('zh', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
