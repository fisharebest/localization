<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptWcho class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptWchoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptWcho();

        self::assertSame('Wcho', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('283', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Wancho', $script->unicodeName());
    }
}
