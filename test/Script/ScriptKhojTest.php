<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptKhoj;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhoj class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptKhoj
 */
class ScriptKhojTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKhoj();

        self::assertSame('Khoj', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('322', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Khojki', $script->unicodeName());
    }
}
