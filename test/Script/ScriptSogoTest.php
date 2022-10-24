<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSogo;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSogo class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSogo
 */
class ScriptSogoTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSogo();

        self::assertSame('Sogo', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('142', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Old_Sogdian', $script->unicodeName());
    }
}
