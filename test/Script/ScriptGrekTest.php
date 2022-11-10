<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptGrek;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptGrek class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptGrek
 */
class ScriptGrekTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptGrek();

        self::assertSame('Grek', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('200', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Greek', $script->unicodeName());
    }
}
