<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptXsux class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptXsuxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptXsux();

        $this->assertSame('Xsux', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('020', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Cuneiform', $script->unicodeName());
    }
}
