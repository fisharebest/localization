<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptJava;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptJava class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptJava
 */
class ScriptJavaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptJava();

        self::assertSame('Java', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('361', $script->number());
        self::assertSame(array('꧐', '꧑', '꧒', '꧓', '꧔', '꧕', '꧖', '꧗', '꧘', '꧙'), $script->numerals());
        self::assertSame('Javanese', $script->unicodeName());
    }
}
