<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDogrTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDogrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDogr();

        self::assertSame('Dogr', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('328', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Dogra', $script->unicodeName());
    }
}
