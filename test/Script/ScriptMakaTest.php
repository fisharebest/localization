<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMaka;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMakaTest class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptMakaTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMaka();

        self::assertSame('Maka', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('366', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Makasar', $script->unicodeName());
    }
}
