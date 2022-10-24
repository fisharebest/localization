<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptJurc;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptJurc class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptJurc
 */
class ScriptJurcTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptJurc();

        self::assertSame('Jurc', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('510', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertNull($script->unicodeName());
    }
}
