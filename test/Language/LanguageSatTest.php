<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageSat;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptOlck;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageSat
 */
class LanguageSatTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSat();

        self::assertEquals(new ScriptOlck(), $language->defaultScript());
        self::assertEquals(new TerritoryIn(), $language->defaultTerritory());
        self::assertEquals(new PluralRuleOneTwoOther(), $language->pluralRule());
        self::assertSame('sat', $language->code());
    }
}
