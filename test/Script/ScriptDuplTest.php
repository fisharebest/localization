<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDupl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptDuplTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDupl();

        $this->assertSame('Dupl', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('755', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Duployan', $script->unicodeName());
    }
}
