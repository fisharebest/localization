<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageKm;
use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptKhmr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageKm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageKm();

        self::assertEquals(new ScriptKhmr(), $language->defaultScript());
        self::assertEquals(new PluralRule0(), $language->pluralRule());
        self::assertSame('km', $language->code());
    }
}
