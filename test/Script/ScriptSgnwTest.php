<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSgnw;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSgnw class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSgnw
 */
class ScriptSgnwTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSgnw();

        self::assertSame('Sgnw', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('095', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('SignWriting', $script->unicodeName());
    }
}
