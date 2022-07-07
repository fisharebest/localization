<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJv;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJava;
use Fisharebest\Localization\Territory\TerritoryId;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleKo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleJvIdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleJvId();

        self::assertEquals(new LanguageJv(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptJava(), $locale->script());
        self::assertEquals(new TerritoryId(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('jv_ID', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('꧐꧑꧒꧓꧔꧕꧖꧗꧘꧙', $locale->digits('0123456789'));
        self::assertSame('ꦧꦱꦗꦮ', $locale->endonym());
        self::assertSame('lang="jv"', $locale->htmlAttributes());
        self::assertSame('jv', $locale->languageTag());
        self::assertSame('-꧑꧒꧓', $locale->number(-123));
        self::assertSame('꧑꧒.꧓꧔꧕.꧖꧗꧘,꧐꧙', $locale->number(12345678.09));
        self::assertSame('꧑.꧒꧓꧔,꧕꧖%', $locale->percent(12.3456));
    }
}
