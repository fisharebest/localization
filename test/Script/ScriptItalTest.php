<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptItal;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptItal class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptItal
 */
class ScriptItalTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptItal();

        self::assertSame('Ital', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('210', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Old_Italic', $script->unicodeName());
    }
}
