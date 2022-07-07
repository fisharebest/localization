<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLisu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptLisuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptLisu();

        self::assertSame('Lisu', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('399', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Lisu', $script->unicodeName());
    }
}
