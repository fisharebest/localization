<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptUgar class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptUgarTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptUgar();

        $this->assertSame('Ugar', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('040', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Ugaritic', $script->unicodeName());
    }
}
