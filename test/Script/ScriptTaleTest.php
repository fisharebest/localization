<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptTale;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptTale class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptTale
 */
class ScriptTaleTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptTale();

        self::assertSame('Tale', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('353', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Tai_Le', $script->unicodeName());
    }
}
