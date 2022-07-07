<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRjng class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptRjngTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptRjng();

        self::assertSame('Rjng', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('363', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Rejang', $script->unicodeName());
    }
}
