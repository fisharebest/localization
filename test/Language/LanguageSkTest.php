<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageSk;
use Fisharebest\Localization\PluralRule\PluralRule8;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritorySk;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageSk
 */
class LanguageSkTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageSk();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new TerritorySk(), $language->defaultTerritory());
        self::assertEquals(new PluralRule8(), $language->pluralRule());
        self::assertSame('sk', $language->code());
    }
}
