<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCs;
use Fisharebest\Localization\Locale\LocaleCsCz;
use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryCz;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCsCz class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCsCzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCsCz();

        self::assertEquals(new LanguageCs(), $locale->language());
        self::assertEquals(new PluralRule8(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryCz(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('cs_CZ', $locale->code());
        self::assertSame('czech_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="cs"', $locale->htmlAttributes());
        self::assertSame('cs', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56 %', $locale->percent(12.3456));
    }
}
