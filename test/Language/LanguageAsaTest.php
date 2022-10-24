<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageAsa;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryTz;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageAsa
 */
class LanguageAsaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAsa();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new TerritoryTz(), $language->defaultTerritory());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('asa', $language->code());
    }
}
