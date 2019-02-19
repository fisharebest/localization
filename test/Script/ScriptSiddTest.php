<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptSidd class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptSiddTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSidd();

        $this->assertSame('Sidd', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('302', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Siddham', $script->unicodeName());
    }
}
