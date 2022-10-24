<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptEthi;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptEthi class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptEthi
 */
class ScriptEthiTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $script = new ScriptEthi();

        self::assertSame('Ethi', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('430', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Ethiopic', $script->unicodeName());
    }
}
