<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptItal class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptItalTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptItal();

        $this->assertSame('Ital', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('210', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_Italic', $script->unicodeName());
    }
}
