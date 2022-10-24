<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageAr;
use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\Territory001;
use PHPUnit\Framework\TestCase;

/**
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Language\AbstractLanguage
 * @covers \Fisharebest\Localization\Language\LanguageAr
 */
class LanguageArTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $language = new LanguageAr();

        self::assertEquals(new ScriptArab(), $language->defaultScript());
        self::assertEquals(new Territory001(), $language->defaultTerritory());
        self::assertEquals(new PluralRule12(), $language->pluralRule());
        self::assertSame('ar', $language->code());
    }
}
