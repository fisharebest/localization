<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGonmTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptGonmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGonm();

        $this->assertSame('Gonm', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('313', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Masaram_Gondi', $script->unicodeName());
    }
}
