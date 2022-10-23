<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptHang;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptHang class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptHangTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptHang();

        self::assertSame('Hang', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('286', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Hangul', $script->unicodeName());
    }
}
