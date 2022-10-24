<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageSmj;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageSmj
 */
class LanguageSmjTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSmj();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new TerritorySe(), $language->defaultTerritory());
        self::assertEquals(new PluralRuleOneTwoOther(), $language->pluralRule());
        self::assertSame('smj', $language->code());
    }
}
