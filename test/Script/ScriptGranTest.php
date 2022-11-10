<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptGran;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGran class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptGran
 */
class ScriptGranTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGran();

        self::assertSame('Gran', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('343', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Grantha', $script->unicodeName());
    }
}
