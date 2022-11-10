<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptAran;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAran class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptAran
 */
class ScriptAranTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAran();

        self::assertSame('Aran', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('161', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
