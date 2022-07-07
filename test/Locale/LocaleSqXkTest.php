<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSq;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryXk;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSqXk class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSqXkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSqXk();

        self::assertEquals(new LanguageSq(), $locale->language());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryXk(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sq_XK', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="sq-XK"', $locale->htmlAttributes());
        self::assertSame('sq-XK', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
