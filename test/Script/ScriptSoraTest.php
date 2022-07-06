<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSora class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptSoraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSora();

        $this->assertSame('Sora', $script->code());
        $this->assertSame('ltr', $script->direction());
        $this->assertSame('398', $script->number());
        $this->assertSame(array('𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'), $script->numerals());
        $this->assertSame('Sora_Sompeng', $script->unicodeName());
    }
}
