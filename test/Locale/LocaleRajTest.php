<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageRaj;
use Fisharebest\Localization\Locale\LocaleRaj;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleRaj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleRaj
 */
class LocaleRajTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleRaj();

        self::assertEquals(new LanguageRaj(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptDeva(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('raj_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('राजस्थानी', $locale->endonym());
        self::assertSame('राजस्थानी', $locale->endonymSortable());
        self::assertSame('lang="raj"', $locale->htmlAttributes());
        self::assertSame('raj', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
