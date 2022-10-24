<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageTi;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEt;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageTi
 */
class LanguageTiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageTi();

        self::assertEquals(new ScriptEthi(), $language->defaultScript());
        self::assertEquals(new TerritoryEt(), $language->defaultTerritory());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('ti', $language->code());
    }
}
