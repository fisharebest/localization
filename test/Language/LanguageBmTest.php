<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageBm;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMl;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageBm
 */
class LanguageBmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageBm();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new TerritoryMl(), $language->defaultTerritory());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('bm', $language->code());
    }
}
