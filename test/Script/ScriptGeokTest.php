<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGeok class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptGeokTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGeok();

        $this->assertSame('Geok', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('241', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Georgian', $script->unicodeName());
    }
}
