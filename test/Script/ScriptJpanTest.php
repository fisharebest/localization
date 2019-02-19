<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptJpan class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptJpanTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptJpan();

        $this->assertSame('Jpan', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('413', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertNull($script->unicodeName());
    }
}
