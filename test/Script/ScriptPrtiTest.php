<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptPrti;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptPrti class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptPrti
 */
class ScriptPrtiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptPrti();

        self::assertSame('Prti', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('130', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Inscriptional_Parthian', $script->unicodeName());
    }
}
