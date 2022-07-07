<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptWara class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptWaraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptWara();

        self::assertSame('Wara', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('262', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Warang_Citi', $script->unicodeName());
    }
}
