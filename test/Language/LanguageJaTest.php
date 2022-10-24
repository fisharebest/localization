<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageJa;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptJpan;
use Fisharebest\Localization\Territory\TerritoryJp;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageJa
 */
class LanguageJaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageJa();

        self::assertEquals(new ScriptJpan(), $language->defaultScript());
        self::assertEquals(new TerritoryJp(), $language->defaultTerritory());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('ja', $language->code());
    }
}
