<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMand;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMand class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptMand
 */
class ScriptMandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptMand();

        self::assertSame('Mand', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('140', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Mandaic', $script->unicodeName());
    }
}
