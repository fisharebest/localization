<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptKhar;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKhar class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptKhar
 */
class ScriptKharTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptKhar();

        self::assertSame('Khar', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('305', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Kharoshthi', $script->unicodeName());
    }
}
