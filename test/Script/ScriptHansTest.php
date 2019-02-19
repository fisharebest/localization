<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptHans class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptHansTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHans();

        $this->assertSame('Hans', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('501', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertNull($script->unicodeName());
    }
}
