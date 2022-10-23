<?php

namespace Fisharebest\LocalizationTest\Locale;

use Fisharebest\Localization\Language\LanguageTa;
use Fisharebest\Localization\Locale\LocaleTaSg;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTaml;
use Fisharebest\Localization\Territory\TerritorySg;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleTaSg class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTaSgTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleTaSg();

        self::assertEquals(new LanguageTa(), $locale->language());
        self::assertEquals(new PluralRule1(), $locale->pluralRule());
        self::assertEquals(new ScriptTaml(), $locale->script());
        self::assertEquals(new TerritorySg(), $locale->territory());
        self::assertNull($locale->variant());
        self::assertSame('ta_SG', $locale->code());
        self::assertSame('unicode_ci', $locale->collation());
        self::assertSame('௦௧௨௩௪௫௬௭௮௯', $locale->digits('0123456789'));
        self::assertSame('lang="ta-SG"', $locale->htmlAttributes());
        self::assertSame('ta-SG', $locale->languageTag());
        self::assertSame('-௧௨௩', $locale->number(-123));
        self::assertSame('௧௨,௩௪௫,௬௭௮.௦௯', $locale->number(12345678.09));
        self::assertSame('௧,௨௩௪.௫௬%', $locale->percent(12.3456));
    }
}
