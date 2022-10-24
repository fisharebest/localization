<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptModi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptModi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptModi
 */
class ScriptModiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptModi();

        self::assertSame('Modi', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('324', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Modi', $script->unicodeName());
    }
}
