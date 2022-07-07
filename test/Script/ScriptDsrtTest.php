<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDsrt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptDsrtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDsrt();

        self::assertSame('Dsrt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('250', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Deseret', $script->unicodeName());
    }
}
