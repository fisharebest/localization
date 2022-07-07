<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTelu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTeluTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTelu();

        self::assertSame('Telu', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('340', $script->number());
        self::assertSame(array('౦', '౧', '౨', '౩', '౪', '౫', '౬', '౭', '౮', '౯'), $script->numerals());
        self::assertSame('Telugu', $script->unicodeName());
    }
}
