<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptKhmr class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptKhmrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKhmr();

        $this->assertSame('Khmr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('355', $script->number());
        $this->assertSame(array('០', '១', '២', '៣', '៤', '៥', '៦', '៧', '៨', '៩'), $script->numerals());
        $this->assertSame('Khmer', $script->unicodeName());
    }
}
