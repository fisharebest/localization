<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageShi;
use Fisharebest\Localization\PluralRule\PluralRuleTachelhit;
use Fisharebest\Localization\Script\ScriptTfng;
use Fisharebest\Localization\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageShi
 */
class LanguageShiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageShi();

        self::assertEquals(new ScriptTfng(), $language->defaultScript());
        self::assertEquals(new TerritoryMa(), $language->defaultTerritory());
        self::assertEquals(new PluralRuleTachelhit(), $language->pluralRule());
        self::assertSame('shi', $language->code());
    }
}
