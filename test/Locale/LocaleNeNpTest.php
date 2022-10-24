<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageNe;
use Fisharebest\Localization\Locale\LocaleNeNp;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryNp;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNeNp class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleNeNp
 */
class LocaleNeNpTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleNeNp();

        self::assertEquals(new LanguageNe(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptDeva(), $locale->script());
        self::assertEquals(new TerritoryNp(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ne_NP', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('नेपाली', $locale->endonym());
        self::assertSame('नेपाली', $locale->endonymSortable());
        self::assertSame('lang="ne"', $locale->htmlAttributes());
        self::assertSame('ne', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
