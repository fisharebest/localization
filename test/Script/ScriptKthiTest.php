<?php

namespace Fisharebest\Localization\Script;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptKthi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptKthiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptKthi();

        self::assertSame('Kthi', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('317', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Kaithi', $script->unicodeName());
    }
}
