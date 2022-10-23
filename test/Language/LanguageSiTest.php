<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageSi;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptSinh;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageSi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageSi();

        self::assertEquals(new ScriptSinh(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('si', $language->code());
    }
}
