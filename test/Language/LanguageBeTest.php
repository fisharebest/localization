<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageBe;
use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryBy;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageBe
 */
class LanguageBeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageBe();

        self::assertEquals(new ScriptCyrl(), $language->defaultScript());
        self::assertEquals(new TerritoryBy(), $language->defaultTerritory());
        self::assertEquals(new PluralRule7(), $language->pluralRule());
        self::assertSame('be', $language->code());
    }
}
