<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhoj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptKhojTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKhoj();

        $this->assertSame('Khoj', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('322', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Khojki', $script->unicodeName());
    }
}
