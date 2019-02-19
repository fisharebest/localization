<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptHani class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
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
