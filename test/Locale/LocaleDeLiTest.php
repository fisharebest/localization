<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageDe;
use Fisharebest\Localization\Locale\LocaleDeLi;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryLi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleDeLi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleDeLi
 */
class LocaleDeLiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleDeLi();

        self::assertEquals(new LanguageDe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryLi(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('de_LI', $locale->code());
        self::assertSame('german2_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Deutsch', $locale->endonym());
        self::assertSame('DEUTSCH', $locale->endonymSortable());
        self::assertSame('lang="de-LI"', $locale->htmlAttributes());
        self::assertSame('de-LI', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12’345’678.09', $locale->number(12345678.09));
        self::assertSame('1’234.56%', $locale->percent(12.3456));
    }
}
