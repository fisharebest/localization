<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEthi class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptEthiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptEthi();

        $this->assertSame('Ethi', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('430', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Ethiopic', $script->unicodeName());
    }
}
