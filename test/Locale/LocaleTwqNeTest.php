<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTwq;
use Fisharebest\Localization\Locale\LocaleTwqNe;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryNe;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTwqNe class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleTwqNe
 */
class LocaleTwqNeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTwqNe();

        self::assertEquals(new LanguageTwq(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryNe(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('twq_NE', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Tasawaq senni', $locale->endonym());
        self::assertSame('TASAWAQ SENNI', $locale->endonymSortable());
        self::assertSame('lang="twq"', $locale->htmlAttributes());
        self::assertSame('twq', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678.09', $locale->number(12345678.09));
        self::assertSame('1 234.56%', $locale->percent(12.3456));
    }
}
