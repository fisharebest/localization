<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMult;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMult class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMultTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMult();

        self::assertSame('Mult', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('323', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Multani', $script->unicodeName());
    }
}
