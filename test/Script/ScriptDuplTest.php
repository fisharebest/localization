<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDupl class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDuplTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDupl();

        self::assertSame('Dupl', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('755', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Duployan', $script->unicodeName());
    }
}
