<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBopo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBopoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBopo();

        $this->assertSame('Bopo', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('285', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Bopomofo', $script->unicodeName());
    }
}
