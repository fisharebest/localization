<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKits class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKitsTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKits();

        self::assertSame('Kits', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('288', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Khitan_Small_Script', $script->unicodeName());
    }
}
