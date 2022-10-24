<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageMk;
use Fisharebest\Localization\Locale\LocaleMkMk;
use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryMk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleMkMk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleMkMk
 */
class LocaleMkMkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleMkMk();

        self::assertEquals(new LanguageMk(), $locale->language());
        self::assertEquals(new PluralRule15(), $locale->pluralRule());
        self::assertEquals(new ScriptCyrl(), $locale->script());
        self::assertEquals(new TerritoryMk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('mk_MK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('македонски', $locale->endonym());
        self::assertSame('МАКЕДОНСКИ', $locale->endonymSortable());
        self::assertSame('lang="mk"', $locale->htmlAttributes());
        self::assertSame('mk', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12.345.678,09', $locale->number(12345678.09));
        self::assertSame('1.234,56 %', $locale->percent(12.3456));
    }
}
