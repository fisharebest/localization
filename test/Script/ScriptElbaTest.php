<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptElba class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class ScriptElbaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptElba();

        $this->assertSame('Elba', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('226', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Elbasan', $script->unicodeName());
    }
}
