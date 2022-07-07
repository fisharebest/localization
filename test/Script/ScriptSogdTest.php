<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSogd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSogdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSogd();

        self::assertSame('Sogd', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('141', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Sogdian', $script->unicodeName());
    }
}
