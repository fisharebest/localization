<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageLrc;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageLrc
 */
class LanguageLrcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageLrc();

        self::assertEquals(new ScriptArab(), $language->defaultScript());
        self::assertEquals(new TerritoryIr(), $language->defaultTerritory());
        self::assertEquals(new PluralRule12(), $language->pluralRule());
        self::assertSame('lrc', $language->code());
    }
}
