<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageQu;
use Fisharebest\Localization\Locale\LocaleQu;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleQu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleQu
 */
class LocaleQuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleQu();

        self::assertEquals(new LanguageQu(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('qu_PE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Runasimi', $locale->endonym());
        self::assertSame('RUNASIMI', $locale->endonymSortable());
        self::assertSame('lang="qu"', $locale->htmlAttributes());
        self::assertSame('qu', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56 %', $locale->percent(12.3456));
    }
}
