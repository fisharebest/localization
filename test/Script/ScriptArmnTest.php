<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptArmn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptArmn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptArmn
 */
class ScriptArmnTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptArmn();

        self::assertSame('Armn', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('230', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Armenian', $script->unicodeName());
    }
}
