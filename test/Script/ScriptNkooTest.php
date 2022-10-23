<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptNkoo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNkoo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class ScriptNkooTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptNkoo();

        self::assertSame('Nkoo', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('165', $script->number());
        self::assertSame(array('߀', '߁', '߂', '߃', '߄', '߅', '߆', '߇', '߈', '߉'), $script->numerals());
        self::assertSame('Nko', $script->unicodeName());
    }
}
