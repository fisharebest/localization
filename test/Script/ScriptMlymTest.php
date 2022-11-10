<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMlym;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMlym class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptMlym
 */
class ScriptMlymTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMlym();

        self::assertSame('Mlym', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('347', $script->number());
        self::assertSame(['൦', '൧', '൨', '൩', '൪', '൫', '൬', '൭', '൮', '൯'], $script->numerals());
        self::assertSame('Malayalam', $script->unicodeName());
    }
}
