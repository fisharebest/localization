<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSora;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSora class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSoraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSora();

        self::assertSame('Sora', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('398', $script->number());
        self::assertSame(array('𑃰', '𑃱', '𑃲', '𑃳', '𑃴', '𑃵', '𑃶', '𑃷', '𑃸', '𑃹'), $script->numerals());
        self::assertSame('Sora_Sompeng', $script->unicodeName());
    }
}
