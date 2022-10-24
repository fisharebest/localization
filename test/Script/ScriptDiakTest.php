<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptDiak;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptDiak class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptDiak
 */
class ScriptDiakTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptDiak();

        self::assertSame('Diak', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('342', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Dives_Akuru', $script->unicodeName());
    }
}
