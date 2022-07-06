<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKana class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
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
