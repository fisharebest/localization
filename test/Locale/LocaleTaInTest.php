<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTa;
use Fisharebest\Localization\Locale\LocaleTaIn;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTaml;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTaIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Locale\AbstractLocale
 * @covers \Fisharebest\Localization\Locale\LocaleTaIn
 */
class LocaleTaInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $locale = new LocaleTaIn();

        self::assertEquals(new LanguageTa(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptTaml(), $locale->script());
        self::assertEquals(new TerritoryIn(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ta_IN', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        self::assertSame('ltr', $locale->direction());
        self::assertSame('தமிழ்', $locale->endonym());
        self::assertSame('தமிழ்', $locale->endonymSortable());
        self::assertSame('lang="ta"', $locale->htmlAttributes());
        self::assertSame('ta', $locale->languageTag());
        self::assertSame('-௧௨௩', $locale->number(-123));
        self::assertSame('௧,௨௩,௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        self::assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
