<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptBass class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptBassTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBass();

        $this->assertSame('Bass', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('259', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Bassa_Vah', $script->unicodeName());
    }
}
