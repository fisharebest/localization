<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageMfe;
use Fisharebest\Localization\Locale\LocaleMfe;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMfe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleMfe
 */
class LocaleMfeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMfe();

        self::assertEquals(new LanguageMfe(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryMu(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mfe_MU', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('kreol morisien', $locale->endonym());
        self::assertSame('KREOL MORISIEN', $locale->endonymSortable());
        self::assertSame('lang="mfe"', $locale->htmlAttributes());
        self::assertSame('mfe', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678.09', $locale->number(12345678.09));
        self::assertSame('1 234.56%', $locale->percent(12.3456));
    }
}
