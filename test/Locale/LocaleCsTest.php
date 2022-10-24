<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCs;
use Fisharebest\Localization\Locale\LocaleCs;
use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCs class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCs
 */
class LocaleCsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleCs();

        self::assertEquals(new LanguageCs(), $locale->language());
        self::assertEquals(new PluralRule8(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryCz(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('cs_CZ', $locale->code());
        self::assertSame('czech_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('čeština', $locale->endonym());
        self::assertSame('CESTINA', $locale->endonymSortable());
        self::assertSame('lang="cs"', $locale->htmlAttributes());
        self::assertSame('cs', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
