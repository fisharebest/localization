<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLimb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptLimbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLimb();

        $this->assertSame('Limb', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('336', $script->number());
        $this->assertSame(array('᥆', '᥇', '᥈', '᥉', '᥊', '᥋', '᥌', '᥍', '᥎', '᥏'), $script->numerals());
        $this->assertSame('Limbu', $script->unicodeName());
    }
}
