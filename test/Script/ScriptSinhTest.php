<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSinh class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSinhTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSinh();

        self::assertSame('Sinh', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('348', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Sinhala', $script->unicodeName());
    }
}
