<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCyrl class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptCyrlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCyrl();

        $this->assertSame('Cyrl', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('220', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Cyrillic', $script->unicodeName());
    }
}
