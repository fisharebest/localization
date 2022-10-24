<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptMroo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptMroo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptMroo
 */
class ScriptMrooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptMroo();

        self::assertSame('Mroo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('264', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Mro', $script->unicodeName());
    }
}
