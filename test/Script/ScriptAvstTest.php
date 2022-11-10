<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptAvst;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptAvst class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptAvst
 */
class ScriptAvstTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptAvst();

        self::assertSame('Avst', $script->code());
        self::assertSame('rtl', $script->direction());
        self::assertSame('134', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Avestan', $script->unicodeName());
    }
}
