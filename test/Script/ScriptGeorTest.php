<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGeor class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptGeorTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGeor();

        $this->assertSame('Geor', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('240', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Georgian', $script->unicodeName());
    }
}
