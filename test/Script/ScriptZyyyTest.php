<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptZyyy class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptZyyyTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptZyyy();

        self::assertSame('Zyyy', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('998', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Common', $script->unicodeName());
    }
}
