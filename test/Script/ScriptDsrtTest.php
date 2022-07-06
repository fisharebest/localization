<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDsrt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDsrtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDsrt();

        $this->assertSame('Dsrt', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('250', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Deseret', $script->unicodeName());
    }
}
