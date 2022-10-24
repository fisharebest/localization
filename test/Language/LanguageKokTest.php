<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageKok;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageKok
 */
class LanguageKokTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageKok();

        self::assertEquals(new ScriptDeva(), $language->defaultScript());
        self::assertEquals(new TerritoryIn(), $language->defaultTerritory());
        self::assertEquals(new PluralRuleUnknown(), $language->pluralRule());
        self::assertSame('kok', $language->code());
    }
}
