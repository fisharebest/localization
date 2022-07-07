<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHano class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHanoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHano();

        self::assertSame('Hano', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('371', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Hanunoo', $script->unicodeName());
    }
}
