<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageQu;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleQuEc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleQuEcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleQuEc();

        self::assertEquals(new LanguageQu(), $locale->language());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryEc(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('qu_EC', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="qu-EC"', $locale->htmlAttributes());
        self::assertSame('qu-EC', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56 %', $locale->percent(12.3456));
    }
}
