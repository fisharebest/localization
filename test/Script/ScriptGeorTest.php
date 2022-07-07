<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGeor class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGeorTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGeor();

        self::assertSame('Geor', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('240', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Georgian', $script->unicodeName());
    }
}
