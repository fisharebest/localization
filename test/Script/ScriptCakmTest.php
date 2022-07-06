<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCakm class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptCakmTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCakm();

        $this->assertSame('Cakm', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('349', $script->number());
        $this->assertSame(array('𑄶', '𑄷', '𑄸', '𑄹', '𑄺', '𑄻', '𑄼', '𑄽', '𑄾', '𑄿'), $script->numerals());
        $this->assertSame('Chakma', $script->unicodeName());
    }
}
