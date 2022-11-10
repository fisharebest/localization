<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCopt;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCopt class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptCopt
 */
class ScriptCoptTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCopt();

        self::assertSame('Copt', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('204', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Coptic', $script->unicodeName());
    }
}
