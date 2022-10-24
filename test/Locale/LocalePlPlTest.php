<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguagePl;
use Fisharebest\Localization\Locale\LocalePlPl;
use Fisharebest\Localization\PluralRule\PluralRule9;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryPl;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePlPl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocalePlPl
 */
class LocalePlPlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePlPl();

        self::assertEquals(new LanguagePl(), $locale->language());
        self::assertEquals(new PluralRule9(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryPl(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('pl_PL', $locale->code());
        self::assertSame('polish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('polski', $locale->endonym());
        self::assertSame('POLSKI', $locale->endonymSortable());
        self::assertSame('lang="pl"', $locale->htmlAttributes());
        self::assertSame('pl', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
