<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTagb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTagbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTagb();

        $this->assertSame('Tagb', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('373', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tagbanwa', $script->unicodeName());
    }
}
