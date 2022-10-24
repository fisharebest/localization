<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageCy;
use Fisharebest\Localization\Locale\LocaleCy;
use Fisharebest\Localization\PluralRule\PluralRuleWelsh;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryGb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleCy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleCy
 */
class LocaleCyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleCy();

        self::assertEquals(new LanguageCy(), $locale->language());
        self::assertEquals(new PluralRuleWelsh(), $locale->pluralRule());
        self::assertEquals(new ScriptLatn(), $locale->script());
        self::assertEquals(new TerritoryGb(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('cy_GB', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('0123456789', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('Cymraeg', $locale->endonym());
        self::assertSame('CYMRAEG', $locale->endonymSortable());
        self::assertSame('lang="cy"', $locale->htmlAttributes());
        self::assertSame('cy', $locale->languageTag());
        self::assertSame('-123', $locale->number(-123));
        self::assertSame('12,345,678.09', $locale->number(12345678.09));
        self::assertSame('1,234.56%', $locale->percent(12.3456));
    }
}
