<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCher;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCher class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptCherTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptCher();

        self::assertSame('Cher', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('445', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Cherokee', $script->unicodeName());
    }
}
