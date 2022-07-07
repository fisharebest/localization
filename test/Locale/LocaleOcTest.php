<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOc;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryFr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleOc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleOcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleOc();

        self::assertEquals(new LanguageOc(), $locale->language());
        self::assertEquals(new PluralRule2(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryFr(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('oc_FR', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('lenga d’òc', $locale->endonym());
        self::assertSame('lang="oc"', $locale->htmlAttributes());
        self::assertSame('oc', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
