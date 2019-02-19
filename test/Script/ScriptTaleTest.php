<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptTale class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptTaleTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTale();

        $this->assertSame('Tale', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('353', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Tai_Le', $script->unicodeName());
    }
}
