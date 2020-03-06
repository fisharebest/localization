<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMymr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptMymrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMymr();

        $this->assertSame('Mymr', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('350', $script->number());
        $this->assertSame(array('၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'), $script->numerals());
        $this->assertSame('Myanmar', $script->unicodeName());
    }
}
