<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptLaoo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptLaooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLaoo();

        $this->assertSame('Laoo', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame(array('໐', '໑', '໒', '໓', '໔', '໕', '໖', '໗', '໘', '໙'), $script->numerals());
        $this->assertSame('Lao', $script->unicodeName());
    }
}
