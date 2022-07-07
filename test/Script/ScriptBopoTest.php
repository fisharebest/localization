<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBopo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptBopoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBopo();

        self::assertSame('Bopo', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('285', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Bopomofo', $script->unicodeName());
    }
}
