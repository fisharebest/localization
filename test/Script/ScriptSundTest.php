<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSund class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptSundTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSund();

        $this->assertSame('Sund', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('362', $script->number());
        $this->assertSame(array('᮰', '᮱', '᮲', '᮳', '᮴', '᮵', '᮶', '᮷', '᮸', '᮹'), $script->numerals());
        $this->assertSame('Sundanese', $script->unicodeName());
    }
}
