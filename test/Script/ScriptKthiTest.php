<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKthi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptKthiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKthi();

        $this->assertSame('Kthi', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('317', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Kaithi', $script->unicodeName());
    }
}
