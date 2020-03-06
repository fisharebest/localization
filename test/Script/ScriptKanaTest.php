<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKana class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class ScriptKanaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKana();

        $this->assertSame('Kana', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('411', $script->number());
        $this->assertSame(array(), $script->numerals());
        $this->assertSame('Katakana', $script->unicodeName());
    }
}
