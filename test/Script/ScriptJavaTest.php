<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptJava class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptJavaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptJava();

        $this->assertSame('Java', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('361', $script->number());
        $this->assertSame(array('꧐', '꧑', '꧒', '꧓', '꧔', '꧕', '꧖', '꧗', '꧘', '꧙'), $script->numerals());
        $this->assertSame('Javanese', $script->unicodeName());
    }
}
