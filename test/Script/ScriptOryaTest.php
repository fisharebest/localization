<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptOrya;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOrya class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptOrya
 */
class ScriptOryaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptOrya();

        self::assertSame('Orya', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('327', $script->number());
        self::assertSame(array('୦', '୧', '୨', '୩', '୪', '୫', '୬', '୭', '୮', '୯'), $script->numerals());
        self::assertSame('Oriya', $script->unicodeName());
    }
}
