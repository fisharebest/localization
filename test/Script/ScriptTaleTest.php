<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTale class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTaleTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTale();

        self::assertSame('Tale', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('353', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Tai_Le', $script->unicodeName());
    }
}
