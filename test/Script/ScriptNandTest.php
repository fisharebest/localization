<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptNand;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptNand class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptNand
 */
class ScriptNandTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptNand();

        self::assertSame('Nand', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('311', $script->number());
        self::assertSame(array(), $script->numerals());
        self::assertSame('Nandinagari', $script->unicodeName());
    }
}
