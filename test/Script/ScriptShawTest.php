<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptShaw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptShawTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptShaw();

        $this->assertSame('Shaw', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('281', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Shavian', $script->unicodeName());
    }
}
