<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptZyyy class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptZyyyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZyyy();

        $this->assertSame('Zyyy', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('998', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Common', $script->unicodeName());
    }
}
