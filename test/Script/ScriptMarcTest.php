<?php

namespace Fisharebest\Localization\Script;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Tests for the ScriptMarc class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptMarcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMarc();

        $this->assertSame('Marc', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('332', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Marchen', $script->unicodeName());
    }
}
