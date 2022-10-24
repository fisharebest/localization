<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCirt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCirt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptCirt
 */
class ScriptCirtTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCirt();

        self::assertSame('Cirt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('291', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
