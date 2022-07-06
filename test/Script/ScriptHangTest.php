<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHang class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptHangTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHang();

        $this->assertSame('Hang', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('286', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Hangul', $script->unicodeName());
    }
}
