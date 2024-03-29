<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageFil;
use Fisharebest\Localization\Locale\LocaleFil;
use Fisharebest\Localization\PluralRule\PluralRuleFilipino;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleFil class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleFil
 */
class LocaleFilTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleFil();

        self::assertEquals(new LanguageFil(), $locale->language());
        self::assertEquals(new PluralRuleFilipino(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('fil_PH', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Filipino', $locale->endonym());
        self::assertSame('FILIPINO', $locale->endonymSortable());
        self::assertSame('lang="fil"', $locale->htmlAttributes());
        self::assertSame('fil', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
