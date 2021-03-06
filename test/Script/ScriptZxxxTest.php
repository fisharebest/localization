<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZxxx class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptZxxxTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZxxx();

        $this->assertSame('Zxxx', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('997', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertNull($script->unicodeName());
    }
}
