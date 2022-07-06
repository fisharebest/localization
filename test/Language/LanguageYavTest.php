<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Script\ScriptLatn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LanguageYav class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageYavTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $language = new LanguageYav();

        $this->assertEquals(new ScriptLatn(), $language->defaultScript());
        $this->assertSame('yav', $language->code());
    }
}
