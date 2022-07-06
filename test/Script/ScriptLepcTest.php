<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLepc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptLepcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLepc();

        $this->assertSame('Lepc', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('335', $script->number());
        $this->assertSame(array('᱀', '᱁', '᱂', '᱃', '᱄', '᱅', '᱆', '᱇', '᱈', '᱉'), $script->numerals());
        $this->assertSame('Lepcha', $script->unicodeName());
    }
}
