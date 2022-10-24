<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptVaii;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptVaii class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptVaii
 */
class ScriptVaiiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptVaii();

        self::assertSame('Vaii', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('470', $script->number());
        self::assertSame(array('꘠', '꘡', '꘢', '꘣', '꘤', '꘥', '꘦', '꘧', '꘨', '꘩'), $script->numerals());
        self::assertSame('Vai', $script->unicodeName());
    }
}
