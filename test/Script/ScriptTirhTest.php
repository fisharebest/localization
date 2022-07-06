<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTirh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptTirhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTirh();

        $this->assertSame('Tirh', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('326', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tirhuta', $script->unicodeName());
    }
}
