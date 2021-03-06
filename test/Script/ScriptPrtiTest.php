<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPrti class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptPrtiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPrti();

        $this->assertSame('Prti', $script->code());
        $this->assertSame('rtl', $script->direction());
        $this->assertSame('130', $script->number());
        $this->assertSame('Inscriptional_Parthian', $script->unicodeName());
        $this->assertSame(array(), $script->numerals());
    }
}
