<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptArmnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptArmn();

        $this->assertSame('Armn', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('230', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Armenian', $script->unicodeName());
    }
}
