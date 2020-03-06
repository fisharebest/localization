<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSind class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptSindTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSind();

        $this->assertSame('Sind', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('318', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Khudawadi', $script->unicodeName());
    }
}
