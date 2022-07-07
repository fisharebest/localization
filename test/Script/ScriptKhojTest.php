<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhoj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKhojTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKhoj();

        self::assertSame('Khoj', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('322', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Khojki', $script->unicodeName());
    }
}
