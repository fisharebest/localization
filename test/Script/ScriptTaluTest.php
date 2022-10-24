<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTalu;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTalu class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTalu
 */
class ScriptTaluTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptTalu();

        self::assertSame('Talu', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('354', $script->number());
        self::assertSame(array('᧐', '᧑', '᧒', '᧓', '᧔', '᧕', '᧖', '᧗', '᧘', '᧙'), $script->numerals());
        self::assertSame('New_Tai_Lue', $script->unicodeName());
    }
}
