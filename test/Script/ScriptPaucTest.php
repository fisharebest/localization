<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPauc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptPaucTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPauc();

        self::assertSame('Pauc', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('263', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Pau_Cin_Hau', $script->unicodeName());
    }
}
