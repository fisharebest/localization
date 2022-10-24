<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptWara;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptWara class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptWara
 */
class ScriptWaraTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptWara();

        self::assertSame('Wara', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('262', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Warang_Citi', $script->unicodeName());
    }
}
