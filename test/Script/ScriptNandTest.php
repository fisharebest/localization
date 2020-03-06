<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNand class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptNandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNand();

        $this->assertSame('Nand', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('311', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Nandinagari', $script->unicodeName());
    }
}
