<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOsge class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOsgeTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOsge();

        self::assertSame('Osge', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('219', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Osage', $script->unicodeName());
    }
}
