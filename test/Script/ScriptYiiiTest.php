<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptYiii class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptYiiiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptYiii();

        $this->assertSame('Yiii', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('460', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Yi', $script->unicodeName());
    }
}
