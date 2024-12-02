<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCcp;
use Fisharebest\Localization\Locale\LocaleCcpIn;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptCakm;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCcpIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2024 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCcpIn
 */
class LocaleCcpInTest extends TestCase
{
    public function testProperties(): void
    {
        $locale = new LocaleCcpIn();

        self::assertEquals(new LanguageCcp(), $locale->language());
        self::assertEquals(new PluralRule0(), $locale->pluralRule());
        self::assertEquals(new ScriptCakm(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ccp_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('𑄶𑄷𑄸𑄹𑄺𑄻𑄼𑄽𑄾𑄿', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('𑄌𑄋𑄴𑄟𑄳𑄦', $locale->endonym());
        self::assertSame('𑄌𑄋𑄴𑄟𑄳𑄦', $locale->endonymSortable());
        self::assertSame('lang="ccp-IN"', $locale->htmlAttributes());
        self::assertSame('ccp-IN', $locale->languageTag());
        self::assertSame('-𑄷𑄸𑄹', $locale->number(-123));
        self::assertSame('𑄷,𑄸𑄹,𑄺𑄻,𑄼𑄽𑄾.𑄶𑄿', $locale->number(12345678.09));
        self::assertSame('𑄷,𑄸𑄹𑄺.𑄻𑄼%', $locale->percent(12.3456));
    }
}
