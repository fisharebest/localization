<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSoyo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSoyoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSoyo();

        $this->assertSame('Soyo', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('329', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Soyombo', $script->unicodeName());
    }
}
