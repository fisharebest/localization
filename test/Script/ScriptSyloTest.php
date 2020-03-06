<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSylo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptSyloTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSylo();

        $this->assertSame('Sylo', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('316', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Syloti_Nagri', $script->unicodeName());
    }
}
