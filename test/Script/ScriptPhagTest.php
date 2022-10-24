<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPhag;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhag class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPhag
 */
class ScriptPhagTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPhag();

        self::assertSame('Phag', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('331', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Phags_Pa', $script->unicodeName());
    }
}
