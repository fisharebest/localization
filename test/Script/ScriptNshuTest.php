<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNshu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNshuTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNshu();

        self::assertSame('Nshu', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('499', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Nushu', $script->unicodeName());
    }
}
