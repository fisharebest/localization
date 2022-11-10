<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptBuhd;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptBuhd class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptBuhd
 */
class ScriptBuhdTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptBuhd();

        self::assertSame('Buhd', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('372', $script->number());
        self::assertSame([], $script->numerals());
        self::assertSame('Buhid', $script->unicodeName());
    }
}
