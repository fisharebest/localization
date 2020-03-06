<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptWara class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptWaraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptWara();

        $this->assertSame('Wara', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('262', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Warang_Citi', $script->unicodeName());
    }
}
