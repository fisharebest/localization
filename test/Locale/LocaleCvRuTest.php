<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCv;
use Fisharebest\Localization\Locale\LocaleCvRu;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCvRu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCvRu
 */
class LocaleCvRuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCvRu();

        self::assertEquals(new LanguageCv(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryRu(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('cv_RU', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('чӑваш', $locale->endonym());
        self::assertSame('ЧӐВАШ', $locale->endonymSortable());
        self::assertSame('lang="cv"', $locale->htmlAttributes());
        self::assertSame('cv', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
