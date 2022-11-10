<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHanb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHanb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptHanb
 */
class ScriptHanbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptHanb();

        self::assertSame('Hanb', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('503', $script->number());
        self::assertSame([], $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
