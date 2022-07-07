<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGeok class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGeokTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGeok();

        self::assertSame('Geok', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('241', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Georgian', $script->unicodeName());
    }
}
