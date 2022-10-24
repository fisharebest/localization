<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSd;
use Fisharebest\Localization\Locale\LocaleSdDevaIn;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSdDevaIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleSdDevaIn
 */
class LocaleSdDevaInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleSdDevaIn();

        self::assertEquals(new LanguageSd(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptDeva(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sd_IN@devanagari', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('rtl', $locale->direction());
        self::assertSame('سنڌي', $locale->endonym());
        self::assertSame('سنڌي', $locale->endonymSortable());
        self::assertSame('lang="sd-Deva-IN" dir="rtl"', $locale->htmlAttributes());
        self::assertSame('sd-Deva-IN', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१२,३४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
