<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptLana class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptLanaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLana();

        $this->assertSame('Lana', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('351', $script->number());
        $this->assertSame(array('᪀', '᪁', '᪂', '᪃', '᪄', '᪅', '᪆', '᪇', '᪈', '᪉'), $script->numerals());
        $this->assertSame('Tai_Tham', $script->unicodeName());
    }
}
