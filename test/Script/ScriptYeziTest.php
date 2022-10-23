<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptYezi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptYezi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptYeziTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptYezi();

        self::assertSame('Yezi', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('192', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Yezidi', $script->unicodeName());
    }
}
