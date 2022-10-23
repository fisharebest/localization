<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCans;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCans class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCansTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCans();

        self::assertSame('Cans', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('440', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Canadian_Aboriginal', $script->unicodeName());
    }
}
