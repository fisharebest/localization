<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPerm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptPermTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPerm();

        $this->assertSame('Perm', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('227', $script->number());
        $this->assertSame(array(), $script->numerals());
    }
}
