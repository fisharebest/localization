<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptBugi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBugi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptBugi
 */
class ScriptBugiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptBugi();

        self::assertSame('Bugi', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('367', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Buginese', $script->unicodeName());
    }
}
