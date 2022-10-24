<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageVai;
use Fisharebest\Localization\Locale\LocaleVaiLatn;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleVaiLatn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleVaiLatn
 */
class LocaleVaiLatnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleVaiLatn();

        self::assertEquals(new LanguageVai(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryLr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('vai_LR@latin', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ꕙꔤ', $locale->endonym());
        self::assertSame('ꕙꔤ', $locale->endonymSortable());
        self::assertSame('lang="vai-Latn"', $locale->htmlAttributes());
        self::assertSame('vai-Latn', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
