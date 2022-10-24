<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageIu;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptCans;
use Fisharebest\Localization\Territory\TerritoryCa;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageIu
 */
class LanguageIuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageIu();

        self::assertEquals(new ScriptCans(), $language->defaultScript());
        self::assertEquals(new TerritoryCa(), $language->defaultTerritory());
        self::assertEquals(new PluralRuleOneTwoOther(), $language->pluralRule());
        self::assertSame('iu', $language->code());
    }
}
