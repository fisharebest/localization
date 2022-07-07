<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSylo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptSyloTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptSylo();

        self::assertSame('Sylo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('316', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Syloti_Nagri', $script->unicodeName());
    }
}
