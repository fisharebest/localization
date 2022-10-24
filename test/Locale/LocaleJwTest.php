<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageJv;
use Fisharebest\Localization\Locale\LocaleJw;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJava;
use Fisharebest\Localization\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleJw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleJw
 */
class LocaleJwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleJw(); // jw is deprecated - use jv

        self::assertEquals(new LanguageJv(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptJava(), $locale->script());
        self::assertEquals(new TerritoryId(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('jv_ID', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('꧐꧑꧒꧓꧔꧕꧖꧗꧘꧙', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Jawa', $locale->endonym());
        self::assertSame('Jawa', $locale->endonymSortable());
        self::assertSame('lang="jv"', $locale->htmlAttributes());
        self::assertSame('jv', $locale->languageTag());
        self::assertSame('-꧑꧒꧓', $locale->number(-123));
        self::assertSame('꧑꧒.꧓꧔꧕.꧖꧗꧘,꧐꧙', $locale->number(12345678.09));
        self::assertSame('꧑.꧒꧓꧔,꧕꧖%', $locale->percent(12.3456));
    }
}
