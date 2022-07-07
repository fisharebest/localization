<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGoth class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptGothTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptGoth();

        self::assertSame('Goth', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('206', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Gothic', $script->unicodeName());
    }
}
