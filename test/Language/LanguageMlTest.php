<?php

namespace Fisharebest\LocalizationTest\Language;

use Fisharebest\Localization\Language\LanguageMl;
use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptMlym;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageMl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageMl();

        self::assertEquals(new ScriptMlym(), $language->defaultScript());
        self::assertEquals(new PluralRule1(), $language->pluralRule());
        self::assertSame('ml', $language->code());
    }
}
