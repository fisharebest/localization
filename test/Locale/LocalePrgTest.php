<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguagePrg;
use Fisharebest\Localization\Locale\LocalePrg;
use Fisharebest\Localization\PluralRule\PluralRule3;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocalePrg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocalePrg
 */
class LocalePrgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocalePrg();

        self::assertEquals(new LanguagePrg(), $locale->language());
        self::assertEquals(new PluralRule3(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new Territory001(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('prg_001', $locale->code());
        self::assertSame('latvian_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('prūsiskan', $locale->endonym());
        self::assertSame('PRŪSISKAN', $locale->endonymSortable());
        self::assertSame('lang="prg"', $locale->htmlAttributes());
        self::assertSame('prg', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12345 678,09', $locale->number(12345678.09));
        self::assertSame('1234,56%', $locale->percent(12.3456));
    }
}
