<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageVai;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptVaii;
use Fisharebest\Localization\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageVai
 */
class LanguageVaiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageVai();

        self::assertEquals(new ScriptVaii(), $language->defaultScript());
        self::assertEquals(new TerritoryLr(), $language->defaultTerritory());
        self::assertEquals(new PluralRuleUnknown(), $language->pluralRule());
        self::assertSame('vai', $language->code());
    }
}
