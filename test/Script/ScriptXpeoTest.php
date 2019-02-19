<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the ScriptXpeo class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptXpeoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptXpeo();

        $this->assertSame('Xpeo', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('030', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Old_Persian', $script->unicodeName());
    }
}
