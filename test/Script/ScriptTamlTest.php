<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTaml class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptTamlTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTaml();

        self::assertSame('Taml', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('346', $script->number());
        self::assertSame(array('௦', '௧', '௨', '௩', '௪', '௫', '௬', '௭', '௮', '௯'), $script->numerals());
        self::assertSame('Tamil', $script->unicodeName());
    }
}
