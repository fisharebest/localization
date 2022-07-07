<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageLn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageLn();

        self::assertEquals(new ScriptLatn(), $language->defaultScript());
        self::assertEquals(new PluralRule2(), $language->pluralRule());
        self::assertSame('ln', $language->code());
    }
}
