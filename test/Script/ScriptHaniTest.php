<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHani class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHaniTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHani();

        $this->assertSame('Hani', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('500', $script->number());
        $this->assertSame(array('〇', '一', '二', '三', '四', '五', '六', '七', '八', '九'), $script->numerals());
        $this->assertSame('Han', $script->unicodeName());
    }
}
