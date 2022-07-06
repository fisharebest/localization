<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMarc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
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
