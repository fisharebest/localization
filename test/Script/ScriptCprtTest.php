<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCprt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptCprtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCprt();

        $this->assertSame('Cprt', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('403', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Cypriot', $script->unicodeName());
    }
}
