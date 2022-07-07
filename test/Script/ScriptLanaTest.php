<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLana class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLanaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLana();

        self::assertSame('Lana', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('351', $script->number());
        self::assertSame(array('᪀', '᪁', '᪂', '᪃', '᪄', '᪅', '᪆', '᪇', '᪈', '᪉'), $script->numerals());
        self::assertSame('Tai_Tham', $script->unicodeName());
    }
}
