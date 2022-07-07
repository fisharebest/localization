<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptOugr class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptOugrTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptOugr();

        self::assertSame('Ougr', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('143', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_Uyghur', $script->unicodeName());
    }
}
