<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageEo;
use Fisharebest\Localization\Locale\LocaleEo;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleEo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleEo
 */
class LocaleEoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleEo();

        self::assertEquals(new LanguageEo(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new Territory001(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('eo_001', $locale->code());
        self::assertSame('esperanto_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('esperanto', $locale->endonym());
        self::assertSame('ESPERANTO', $locale->endonymSortable());
        self::assertSame('lang="eo"', $locale->htmlAttributes());
        self::assertSame('eo', $locale->languageTag());
        self::assertSame('−123', $locale->number(-123));
        self::assertSame('12 345 678,09', $locale->number(12345678.09));
        self::assertSame('1 234,56%', $locale->percent(12.3456));
    }
}
