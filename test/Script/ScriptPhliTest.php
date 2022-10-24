<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPhli;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPhli class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPhli
 */
class ScriptPhliTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptPhli();

        self::assertSame('Phli', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('131', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Inscriptional_Pahlavi', $script->unicodeName());
    }
}
