<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSgnw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptSgnwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSgnw();

        $this->assertSame('Sgnw', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('095', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('SignWriting', $script->unicodeName());
    }
}
