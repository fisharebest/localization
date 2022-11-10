<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptNewa;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNewa class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptNewa
 */
class ScriptNewaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNewa();

        self::assertSame('Newa', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('333', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Newa', $script->unicodeName());
    }
}
