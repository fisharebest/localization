<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageMk;
use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Territory\TerritoryMk;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageMk
 */
class LanguageMkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageMk();

        self::assertEquals(new ScriptCyrl(), $language->defaultScript());
        self::assertEquals(new TerritoryMk(), $language->defaultTerritory());
        self::assertEquals(new PluralRule15(), $language->pluralRule());
        self::assertSame('mk', $language->code());
    }
}
