<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageBgc;
use Fisharebest\Localization\Locale\LocaleBgc;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBgc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleBgc
 */
class LocaleBgcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleBgc();

        self::assertEquals(new LanguageBgc(), $locale->language());
        self::assertEquals(new PluralRuleUnknown(), $locale->pluralRule());
        self::assertEquals(new ScriptDeva(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('bgc_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('०१२३४५६७८९', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('हरियाणवी', $locale->endonym());
        self::assertSame('हरियाणवी', $locale->endonymSortable());
        self::assertSame('lang="bgc"', $locale->htmlAttributes());
        self::assertSame('bgc', $locale->languageTag());
        self::assertSame('-१२३', $locale->number(-123));
        self::assertSame('१,२३,४५,६७८.०९', $locale->number(12345678.09));
        self::assertSame('१,२३४.५६%', $locale->percent(12.3456));
    }
}
