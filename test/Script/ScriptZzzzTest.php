<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZzzz class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptZzzzTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZzzz();

        $this->assertSame('Zzzz', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('999', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Unknown', $script->unicodeName());
    }
}
