<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptSidd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptSidd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptSidd
 */
class ScriptSiddTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptSidd();

        self::assertSame('Sidd', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('302', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Siddham', $script->unicodeName());
    }
}
