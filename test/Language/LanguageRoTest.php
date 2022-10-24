<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageRo;
use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryRo;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageRo
 */
class LanguageRoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageRo();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new TerritoryRo(), $language->defaultTerritory());
        self::assertEquals(new PluralRule5(), $language->pluralRule());
        self::assertSame('ro', $language->code());
    }
}
