<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTh;
use Fisharebest\Localization\Locale\LocaleTh;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptThai;
use Fisharebest\Localization\Territory\TerritoryTh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleThTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTh();

        self::assertEquals(new LanguageTh(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptThai(), $locale->script());
        self::assertEquals(new TerritoryTh(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('๐๑๒๓๔๕๖๗๘๙', $locale->digits('0123456789'));
        self::assertSame('ไทย', $locale->endonym());
        self::assertSame('lang="th"', $locale->htmlAttributes());
        self::assertSame('-๑๒๓', $locale->number(-123));
        self::assertSame('๑๒,๓๔๕,๖๗๘.๐๙', $locale->number(12345678.09));
        self::assertSame('๑,๒๓๔.๕๖%', $locale->percent(12.3456));
    }
}
