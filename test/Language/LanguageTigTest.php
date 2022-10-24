<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageTig;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Territory\TerritoryEr;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageTig
 */
class LanguageTigTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageTig();

        self::assertEquals(new ScriptEthi(), $language->defaultScript());
        self::assertEquals(new TerritoryEr(), $language->defaultTerritory());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('tig', $language->code());
    }
}
