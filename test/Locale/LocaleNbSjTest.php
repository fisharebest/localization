<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageNb;
use Fisharebest\Localization\Locale\LocaleNbSj;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySj;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleNbSj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNbSjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleNbSj();

        self::assertEquals(new LanguageNb(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritorySj(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('nb_SJ', $locale->code());
        self::assertSame('danish_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lang="nb-SJ"', $locale->htmlAttributes());
        self::assertSame('nb-SJ', $locale->languageTag());
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
