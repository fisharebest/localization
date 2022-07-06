<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGujr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGujrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGujr();

        $this->assertSame('Gujr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('320', $script->number());
        $this->assertSame(array('૦', '૧', '૨', '૩', '૪', '૫', '૬', '૭', '૮', '૯'), $script->numerals());
        $this->assertSame('Gujarati', $script->unicodeName());
    }
}
