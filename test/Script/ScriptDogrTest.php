<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDogrTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptDogrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDogr();

        $this->assertSame('Dogr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('328', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Dogra', $script->unicodeName());
    }
}
