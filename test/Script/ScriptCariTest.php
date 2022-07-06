<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCari class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptCariTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCari();

        $this->assertSame('Cari', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('201', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Carian', $script->unicodeName());
    }
}
