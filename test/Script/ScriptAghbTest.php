<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptAghb;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAghb class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptAghb
 */
class ScriptAghbTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptAghb();

        self::assertSame('Aghb', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('239', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Caucasian_Albanian', $script->unicodeName());
    }
}
