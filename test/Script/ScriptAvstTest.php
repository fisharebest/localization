<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAvst class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptAvstTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAvst();

        self::assertSame('Avst', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('134', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Avestan', $script->unicodeName());
    }
}
