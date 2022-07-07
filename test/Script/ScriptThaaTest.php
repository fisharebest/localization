<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptThaa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptThaaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptThaa();

        self::assertSame('Thaa', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('170', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Thaana', $script->unicodeName());
    }
}
