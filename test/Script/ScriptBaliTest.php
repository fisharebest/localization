<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptBali class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptBaliTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBali();

        $this->assertSame('Bali', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('360', $script->number());
        $this->assertSame(array('᭐', '᭑', '᭒', '᭓', '᭔', '᭕', '᭖', '᭗', '᭘', '᭙'), $script->numerals());
        $this->assertSame('Balinese', $script->unicodeName());
    }
}
