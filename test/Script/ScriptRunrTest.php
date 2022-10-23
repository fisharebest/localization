<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptRunr;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptRunr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptRunrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptRunr();

        self::assertSame('Runr', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('211', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Runic', $script->unicodeName());
    }
}
