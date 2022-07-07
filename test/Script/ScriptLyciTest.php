<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLyci class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLyciTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLyci();

        self::assertSame('Lyci', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('202', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Lycian', $script->unicodeName());
    }
}
