<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptBugi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptBugiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBugi();

        $this->assertSame('Bugi', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('367', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Buginese', $script->unicodeName());
    }
}
