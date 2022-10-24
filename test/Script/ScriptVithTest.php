<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptVith;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptVith class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptVith
 */
class ScriptVithTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptVith();

        self::assertSame('Vith', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('228', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Vithkuqi', $script->unicodeName());
    }
}
