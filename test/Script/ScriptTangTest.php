<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTang class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTangTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTang();

        self::assertSame('Tang', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('520', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tangut', $script->unicodeName());
    }
}
