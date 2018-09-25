<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptSind class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2018 Greg Roach
 * @license   GPLv3+
 */
class ScriptSindTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSind();

        $this->assertSame('Sind', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('318', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Khudawadi', $script->unicodeName());
    }
}
