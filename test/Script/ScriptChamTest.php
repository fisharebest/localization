<?php

namespace Fisharebest\LocalizationTest\Script;

use Fisharebest\Localization\Script\ScriptCham;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the ScriptCham class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\Script\AbstractScript
 * @covers \Fisharebest\Localization\Script\ScriptCham
 */
class ScriptChamTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties(): void
    {
        $script = new ScriptCham();

        self::assertSame('Cham', $script->code());
        self::assertSame('ltr', $script->direction());
        self::assertSame('358', $script->number());
        self::assertSame(array('꩐', '꩑', '꩒', '꩓', '꩔', '꩕', '꩖', '꩗', '꩘', '꩙'), $script->numerals());
        self::assertSame('Cham', $script->unicodeName());
    }
}
