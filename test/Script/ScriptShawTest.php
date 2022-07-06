<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptShaw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
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
