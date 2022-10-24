<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageSat;
use Fisharebest\Localization\Locale\LocaleSatOlck;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptOlck;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleSatOlck class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleSatOlck
 */
class LocaleSatOlckTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleSatOlck();

        self::assertEquals(new LanguageSat(), $locale->language());
        self::assertEquals(new PluralRuleOneTwoOther(), $locale->pluralRule());
        self::assertEquals(new ScriptOlck(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('sat_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('᱐᱑᱒᱓᱔᱕᱖᱗᱘᱙', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('ᱥᱟᱱᱛᱟᱲᱤ', $locale->endonym());
        self::assertSame('ᱥᱟᱱᱛᱟᱲᱤ', $locale->endonymSortable());
        self::assertSame('lang="sat"', $locale->htmlAttributes());
        self::assertSame('sat', $locale->languageTag());
        self::assertSame('-᱑᱒᱓', $locale->number(-123));
        self::assertSame('᱑᱒,᱓᱔᱕,᱖᱗᱘.᱐᱙', $locale->number(12345678.09));
        self::assertSame('᱑,᱒᱓᱔.᱕᱖%', $locale->percent(12.3456));
    }
}
