<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptLina;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptLina class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptLina
 */
class ScriptLinaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptLina();

        self::assertSame('Lina', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('400', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Linear_A', $script->unicodeName());
    }
}
